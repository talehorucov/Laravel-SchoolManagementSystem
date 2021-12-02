<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Student;
use App\Models\StuParent;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $student_count = Student::count();
        $staff_count = Staff::count();
        $parent_count = StuParent::count();
        return view('backend.staff.index',compact('student_count','staff_count','parent_count'));
    }

    public function show(Staff $staff)
    {
        return view('backend.staff.profile.show',compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('backend.staff.profile.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        return $request;
        return view('backend.staff.profile.edit', compact('staff'));
    }
}
