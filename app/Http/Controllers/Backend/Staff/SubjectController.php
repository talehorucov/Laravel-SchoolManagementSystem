<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SubjectStoreRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::get();
        return view('backend.staff.subject.index',compact('subjects'));
    }

    public function create()
    {
        return view('backend.staff.subject.store');
    }

    public function store(SubjectStoreRequest $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->save();

        $notification = [
            'message' => 'Fənn Uğurla Əlavə Edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.subject.index')->with($notification);
    }
}
