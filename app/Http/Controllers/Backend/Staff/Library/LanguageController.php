<?php

namespace App\Http\Controllers\Backend\Staff\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Library\LanguageStoreRequest;
use App\Http\Requests\Backend\Library\LanguageUpdateRequest;
use App\Models\Book;
use App\Models\BookLanguage;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $book_languages = BookLanguage::get();
        return view('backend.staff.library.language.index',compact('book_languages'));
    }

    public function create()
    {
        return view('backend.staff.library.language.store');
    }

    public function store(LanguageStoreRequest $request)
    {
        $language = new BookLanguage();
        $language->language = $request->language;
        $language->save();

        $notification = [
            'message' => 'Kitab dili uğurla əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.language.index')->with($notification);
    }
    
    public function edit(BookLanguage $language)
    {
        return view('backend.staff.library.language.edit', compact('language'));
    }

    public function update(LanguageUpdateRequest $request, BookLanguage $language)
    {
        $language->language = $request->language;
        $language->save();

        $notification = [
            'message' => 'Kitab dili uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.language.index')->with($notification);
    }

    public function destroy(BookLanguage $language)
    {
        $language->delete();
        $notification = array(
            'message' => 'Kitab dili uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.library.language.index')->with($notification);
    }

    public function show(BookLanguage $language)
    {
        return view('backend.staff.library.language.show', compact('language'));
    }
}
