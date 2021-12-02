<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SectionStoreRequest;
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
}
