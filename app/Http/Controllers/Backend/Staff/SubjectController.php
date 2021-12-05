<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SubjectStoreRequest;
use App\Http\Requests\Backend\SubjectUpdateRequest;
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
            'message' => 'Fənn uğurla əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.subject.index')->with($notification);
    }
    
    public function edit(Subject $subject)
    {
        return view('backend.staff.subject.edit', compact('subject'));
    }

    public function update(SubjectUpdateRequest $request, Subject $subject)
    {
        $subject->name = $request->name;
        $subject->save();

        $notification = [
            'message' => 'Fənn uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.subject.index')->with($notification);
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        $notification = array(
            'message' => 'Fənn uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.subject.index')->with($notification);
    }

    public function show(Subject $subject)
    {
        return view('backend.staff.subject.show', compact('subject'));
    }
}
