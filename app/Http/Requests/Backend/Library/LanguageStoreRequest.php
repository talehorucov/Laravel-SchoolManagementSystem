<?php

namespace App\Http\Requests\Backend\Library;

use Illuminate\Foundation\Http\FormRequest;

class LanguageStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'language' => 'required|min:2|max:250'
        ];
    }

    public function attributes()
    {
        return [
            'language' => 'Dil'
        ];
    }
}
