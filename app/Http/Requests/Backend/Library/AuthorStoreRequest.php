<?php

namespace App\Http\Requests\Backend\Library;

use Illuminate\Foundation\Http\FormRequest;

class AuthorStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullname' => 'required|min:2|max:250'
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'Yazar ad və soyadı'
        ];
    }
}
