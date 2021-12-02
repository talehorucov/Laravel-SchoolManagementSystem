<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $staffs = Staff::get();
        return view('backend.staff.teacher.index',compact('staffs'));
    }

    public function create()
    {
        return view('backend.staff.student.store');
    }
}
