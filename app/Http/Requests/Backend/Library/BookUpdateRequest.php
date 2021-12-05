<?php

namespace App\Http\Requests\Backend\Library;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'book_language_id' => 'required|exists:book_languages,id',
            'page' => 'required|integer|digits_between:0,30000',
            'cover_photo' => 'image|mimes:jpg,png,jpeg|max:3072',
            'pdf' => 'mimes:pdf',
            'categories' => 'required|array|exists:book_categories,id'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Başlıq',
            'author_id' => 'Yazar',
            'book_language_id' => 'Dil',
            'page' => 'Səhifə sayı',
            'pdf' => 'PDF Faylı',
            'cover_photo' => 'Şəkil',
            'categories' => 'Janr'
        ];
    }
}
