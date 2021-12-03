<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StaffUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'firstname' => 'required|min:2|max:25',
            'lastname' => 'required|min:2|max:25',
            'username' => 'required|min:5|max:25',
            'email' => 'nullable|email|min:6|max:50',
            'password' => 'required|min:5|max:25',
            'dateOfBirth' => 'required|date',
            'identity_no' => 'required|min:7|max:25',
            'gender' => 'required|in:0,1',
            'phone' => 'min:10:|max:50',
            'address' => 'nullable',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:3072',
            'salary' => '',
        ];
    }
    
    public function attributes()
    {
        return [
            'firstname' => 'Ad',
            'lastname' => 'Soyad',
            'username' => 'İstifadəçi adı',
            'email' => 'Email',
            'password' => 'Şifrə',
            'dateOfBirth' => 'Doğum Tarixi',
            'identity_no' => 'Ş/V Seriya Nömrəsi',
            'gender' => 'Cinsiyyət',
            'phone' => 'Əlaqə Nömrəsi',
            'address' => 'Ünvan',
            'photo' => 'Şəkil',
            'salary' => 'Məvacib',
        ];
    }
}
