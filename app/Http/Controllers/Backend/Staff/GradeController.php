<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\GradeStoreRequest;
use App\Http\Requests\Backend\GradeUpdateRequest;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::get();
        return view('backend.staff.grade.index',compact('grades'));
    }

    public function create()
    {
        $sections = Section::get();
        return view('backend.staff.grade.store',compact('sections'));
    }

    public function store(GradeStoreRequest $request)
    {
        $grade = new Grade();
        $grade->name = $request->name;
        $grade->section_id = $request->section_id;
        $grade->save();
        
        $notification = [
            'message' => 'Sinif uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.grade.index')->with($notification);
    }
    
    public function edit(Grade $grade)
    {
        $sections = Section::get();
        return view('backend.staff.grade.edit', compact('grade','sections'));
    }

    public function update(GradeUpdateRequest $request, Grade $grade)
    {
        $grade->name = $request->name;
        $grade->section_id = $request->section_id;
        $grade->save();
        
        $notification = [
            'message' => 'Sinif uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.grade.index')->with($notification);
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        $notification = array(
            'message' => 'Sinif uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.grade.index')->with($notification);
    }

    public function show(Grade $grade)
    {
        return view('backend.staff.grade.show', compact('grade'));
    }
}
