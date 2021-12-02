<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ClassStoreRequest;
use App\Models\SClass;
use App\Models\Section;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = SClass::get();
        return view('backend.staff.class.index',compact('classes'));
    }

    public function create()
    {
        $sections = Section::get();
        return view('backend.staff.class.store',compact('sections'));
    }

    public function store(ClassStoreRequest $request)
    {
        $class = new SClass();
        $class->name = $request->name;
        $class->section_id = $request->section_id;
        $class->save();
        
        $notification = [
            'message' => 'Sinif uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.class.index')->with($notification);
    }
}
