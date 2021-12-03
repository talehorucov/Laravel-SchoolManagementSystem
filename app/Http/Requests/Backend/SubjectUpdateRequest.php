<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SubjectUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Fənn adı'
        ];
    }
}
