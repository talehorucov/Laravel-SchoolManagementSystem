<?php

namespace App\Http\Requests\Backend\Library;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:250'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Kateqoriya'
        ];
    }
}
