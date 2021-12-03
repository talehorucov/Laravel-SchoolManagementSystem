<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Models\Staff;
use App\Models\Student;
use App\Models\StuParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\ParentStoreRequest;
use App\Http\Requests\Backend\ParentUpdateRequest;

class ParentController extends Controller
{
    public function index()
    {
        $parents = StuParent::paginate(1);
        return view('backend.staff.parent.index', compact('parents'));
    }

    public function create()
    {
        return view('backend.staff.parent.store');
    }

    public function store(ParentStoreRequest $request)
    {
        $parent = new StuParent();

        $image = $request->file('photo');
        if ($image) {
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/parents/' . $image_name);
            $image_url = 'uploads/parents/' . $image_name;
            $parent->photo = $image_url;
        }

        $parent->firstname = $request->firstname;
        $parent->lastname = $request->lastname;
        $parent->username = $request->username;
        $parent->email = $request->email;
        $parent->password = $request->password;
        $parent->gender = $request->gender;
        $parent->phone = $request->phone;
        $parent->address = $request->address;
        $parent->photo = $image_url;
        $parent->save();

        $notification = [
            'message' => 'Valideyn uğurla əlavə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.parent.index')->with($notification);
    }

    public function edit(StuParent $parent)
    {
        return view('backend.staff.parent.edit', compact('parent'));
    }

    public function update(ParentUpdateRequest $request, StuParent $parent)
    {
        $existsStaff = Staff::where('username', $request->username)->first();
        $existsStudent = Student::where('username', $request->username)->first();
        $existsParent = StuParent::where('username', $request->username)
            ->where('id', '!=', $parent->id)->first();

        if ($existsParent || $existsStaff || $existsStudent) {
            $notification = [
                'message' => 'Bu istifadəçi sistemdə mövcuddur',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }

        $image = $request->file('photo');
        if ($image) {
            File::delete($parent->photo);
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/parents/' . $image_name);
            $image_url = 'uploads/parents/' . $image_name;
            $parent->photo = $image_url;
        }

        $parent->firstname = $request->firstname;
        $parent->lastname = $request->lastname;
        $parent->username = $request->username;
        $parent->email = $request->email;
        $parent->password = $request->password;
        $parent->gender = $request->gender;
        $parent->phone = $request->phone;
        $parent->address = $request->address;
        $parent->save();

        $notification = [
            'message' => 'Valideyn məlumatları uğurla redaktə edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('staff.parent.index')->with($notification);
    }

    public function destroy(StuParent $parent)
    {
        $parent->delete();
        $notification = array(
            'message' => 'Valideyn uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.parent.index')->with($notification);
    }

    public function show(StuParent $parent)
    {
        return view('backend.staff.parent.show', compact('parent'));
    }
}
