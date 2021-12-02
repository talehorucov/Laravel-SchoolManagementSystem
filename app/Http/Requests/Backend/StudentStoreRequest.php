<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'gender' => 'required|in:0,1',
            'phone' => 'nullable|min:10:|max:50',
            'address' => 'nullable|',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:3072',
            'class_id' => 'nullable|exists:classes,id',
            'parent_id' => 'required|exists:parents,id',
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
            'gender' => 'Cinsiyyət',
            'phone' => 'Əlaqə Nömrəsi',
            'address' => 'Ünvan',
            'photo' => 'Şəkil',
            'class_id' => 'Sinif',
            'parent_id' => 'Valideyn',
        ];
    }
}
