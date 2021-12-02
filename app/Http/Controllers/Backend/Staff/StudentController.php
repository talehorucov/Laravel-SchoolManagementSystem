<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Models\SClass;
use App\Models\Student;
use App\Models\Stustudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\StudentStoreRequest;
use App\Models\StuParent;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(1);
        return view('backend.staff.student.index',compact('students'));
    }

    public function create()
    {
        $parents = StuParent::get();
        $classes = SClass::get();
        return view('backend.staff.student.store',compact('parents','classes'));
    }

    public function store(StudentStoreRequest $request)
    {
        $image = $request->file('photo');
        if ($image) {
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/students/' . $image_name);
            $image_url = 'uploads/students/' . $image_name;
        }
        
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->gender = $request->gender;
        $student->dateOfBirth = $request->dateOfBirth;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->photo = $image_url;
        $student->parent_id = $request->parent_id;
        $student->class_id = $request->class_id;
        $student->save();

        $notification = [
            'message' => 'Şagird uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.student.index')->with($notification);
    }
}
