<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
            'remember' => ''
        ];
    }
     
    public function attributes()
    {
        return [
            'username' => 'İstifadəçi adı',
            'password' => 'Şifrə'
        ];
    }
}
