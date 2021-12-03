<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Models\SClass;
use App\Models\Student;
use App\Models\StuParent;
use App\Models\Stustudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\StudentStoreRequest;
use App\Http\Requests\Backend\StudentUpdateRequest;
use App\Models\Staff;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return view('backend.staff.student.index', compact('students'));
    }

    public function create()
    {
        $parents = StuParent::get();
        $classes = SClass::get();
        return view('backend.staff.student.store', compact('parents', 'classes'));
    }

    public function store(StudentStoreRequest $request)
    {
        $student = new Student();

        $image = $request->file('photo');
        if ($image) {
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/students/' . $image_name);
            $image_url = 'uploads/students/' . $image_name;
            $student->photo = $image_url;
        }

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->gender = $request->gender;
        $student->dateOfBirth = $request->dateOfBirth;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->parent_id = $request->parent_id;
        $student->class_id = $request->class_id;
        $student->save();

        $notification = [
            'message' => 'Şagird uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.student.index')->with($notification);
    }

    public function edit(Student $student)
    {
        $parents = StuParent::get();
        $classes = SClass::get();
        return view('backend.staff.student.edit', compact('student', 'parents', 'classes'));
    }

    public function update(StudentUpdateRequest $request, Student $student)
    {
        $existsStaff = Staff::where('username', $request->username)->first();
        $existsStudent = Student::where('username', $request->username)
            ->where('id', '!=', $student->id)->first();
        $existsParent = StuParent::where('username', $request->username)->first();

        if ($existsParent || $existsStaff || $existsStudent) {
            $notification = [
                'message' => 'Bu istifadəçi sistemdə mövcuddur',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }

        $image = $request->file('photo');
        if ($image) {
            File::delete($student->photo);
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/students/' . $image_name);
            $image_url = 'uploads/students/' . $image_name;
            $student->photo = $image_url;
        }

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->gender = $request->gender;
        $student->dateOfBirth = $request->dateOfBirth;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->parent_id = $request->parent_id;
        $student->class_id = $request->class_id;
        $student->save();

        $notification = [
            'message' => 'Şagird məlumatları uğurla redaktə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.student.index')->with($notification);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        $notification = array(
            'message' => 'Şagird uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.student.index')->with($notification);
    }

    public function show(Student $student)
    {
        return view('backend.staff.student.show', compact('student'));
    }
}
