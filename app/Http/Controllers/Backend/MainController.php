<?php

namespace App\Http\Controllers\Backend;

use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\LoginRequest;

class MainController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function loginFrm()
    {
        return view('backend.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $student = Student::where('username', $request->username)->first();
        $staff = Staff::where('username', $request->username)->first();

        if ($student or $staff) {
            if (Hash::check($request->password, $staff->password)) {
                $notification = [
                    'message' => 'Xoş Gəlmisiniz ' . $staff->firstname,
                    'alert-type' => 'success'
                ];
                return redirect()->route('auth.index')->with($notification);
            }
            return redirect()->back()->with('error', 'İstifadəçi adı1 və ya Şifrə yanlışdır');
        }
        return redirect()->back()->with('error', 'İstifadəçi adı və ya Şifrə yanlışdır');
    }
}
