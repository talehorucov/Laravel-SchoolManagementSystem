<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ClassStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name' => 'required|max:25',
            'section_id' => 'required|exists:sections,id'
        ];
    }
    
    public function attributes()
    {
        return [
            'name' => 'Sinif adı',
            'section_id' => 'Bölmə'
        ];
    }
}
