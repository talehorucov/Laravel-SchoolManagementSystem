<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Models\Staff;
use App\Models\Student;
use App\Models\Subject;
use App\Models\StuParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\StaffStoreRequest;
use App\Http\Requests\Backend\StaffUpdateRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $staffs = Staff::paginate(10);
        return view('backend.staff.staff.index', compact('staffs'));
    }

    public function create()
    {
        $subjects = Subject::get();
        return view('backend.staff.staff.store', compact('subjects'));
    }

    public function store(StaffStoreRequest $request)
    {
        $staff = new Staff();

        $image = $request->file('photo');
        if ($image) {
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/staffs/' . $image_name);
            $image_url = 'uploads/staffs/' . $image_name;
            $staff->photo = $image_url;
        }
        if ($request->join_date) {
            $staff->join_date = $request->join_date;
        }

        $staff->firstname = $request->firstname;
        $staff->lastname = $request->lastname;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->password = $request->password;
        $staff->identity_no = $request->identity_no;
        $staff->gender = $request->gender;
        $staff->dateOfBirth = $request->dateOfBirth;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        $staff->subject_id = $request->subject_id;
        $staff->salary = $request->salary;
        $staff->join_date = now();
        $staff->save();

        $notification = [
            'message' => 'Müəllim uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.staff.index')->with($notification);
    }

    public function edit(Staff $staff)
    {
        $subjects = Subject::get();
        return view('backend.staff.staff.edit', compact('staff', 'subjects'));
    }

    public function update(StaffUpdateRequest $request, Staff $staff)
    {
        $existsStaff = Staff::where('username', $request->username)
            ->where('id', '!=', $staff->id)->first();
        $existsStudent = Student::where('username', $request->username)->first();
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
            File::delete($staff->photo);
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/staffs/' . $image_name);
            $image_url = 'uploads/staffs/' . $image_name;
            $staff->photo = $image_url;
        }

        $staff->firstname = $request->firstname;
        $staff->lastname = $request->lastname;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->password = $request->password;
        $staff->identity_no = $request->identity_no;
        $staff->gender = $request->gender;
        $staff->dateOfBirth = $request->dateOfBirth;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        $staff->subject_id = $request->subject_id;
        $staff->salary = $request->salary;
        $staff->save();

        $notification = [
            'message' => 'Müəllim məlumatları uğurla redaktə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.staff.index')->with($notification);
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        $notification = array(
            'message' => 'Müəllim uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.staff.index')->with($notification);
    }

    public function show(Staff $staff)
    {
        return view('backend.staff.staff.show', compact('staff'));
    }
}
