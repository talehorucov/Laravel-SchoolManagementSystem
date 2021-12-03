<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SectionUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:25'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Bölmə adı'
        ];
    }
}
