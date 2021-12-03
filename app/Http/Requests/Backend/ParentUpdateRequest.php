<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ParentUpdateRequest extends FormRequest
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
            'gender' => 'required|in:0,1',
            'phone' => 'required|min:10:|max:50',
            'address' => '',
            'photo' => 'image|mimes:jpg,png,jpeg|max:3072',
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
            'gender' => 'Cinsiyyət',
            'phone' => 'Əlaqə Nömrəsi',
            'address' => 'Ünvan',
            'photo' => 'Şəkil',
        ];
    }
}
