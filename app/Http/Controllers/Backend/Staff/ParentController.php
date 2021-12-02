<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Models\StuParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\ParentStoreRequest;

class ParentController extends Controller
{
    public function index()
    {
        $parents = StuParent::paginate(1);
        return view('backend.staff.parent.index',compact('parents'));
    }

    public function create()
    {
        return view('backend.staff.parent.store');
    }

    public function store(ParentStoreRequest $request)
    {
        $image = $request->file('photo');
        if ($image) {
            $image_name = $request->username . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/parents/' . $image_name);
            $image_url = 'uploads/parents/' . $image_name;
        }
        
        $parent = new StuParent();
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
}
