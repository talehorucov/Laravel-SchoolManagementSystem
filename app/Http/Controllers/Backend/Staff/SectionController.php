<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SectionStoreRequest;
use App\Http\Requests\Backend\SectionUpdateRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{   
    public function index()
    {
        $sections = Section::get();
        return view('backend.staff.section.index',compact('sections'));
    }

    public function create()
    {
        return view('backend.staff.section.store');
    }

    public function store(SectionStoreRequest $request)
    {
        $section = new Section();
        $section->name = $request->name;
        $section->save();

        $notification = [
            'message' => 'Bölmə Uğurla Əlavə Edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.section.index')->with($notification);
    }
    
    public function edit(Section $section)
    {
        return view('backend.staff.section.edit', compact('section'));
    }

    public function update(SectionUpdateRequest $request, Section $section)
    {
        $section->name = $request->name;
        $section->save();

        $notification = [
            'message' => 'Bölmə uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.section.index')->with($notification);
    }

    public function destroy(Section $section)
    {
        $section->delete();
        $notification = array(
            'message' => 'Bölmə uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.section.index')->with($notification);
    }

    public function show(Section $section)
    {
        return view('backend.staff.section.show', compact('section'));
    }
}
