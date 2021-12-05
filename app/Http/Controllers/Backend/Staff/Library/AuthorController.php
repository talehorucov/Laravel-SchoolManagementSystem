<?php

namespace App\Http\Controllers\Backend\Staff\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Library\AuthorStoreRequest;
use App\Http\Requests\Backend\Library\AuthorUpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{   
    public function index()
    {
        $authors = Author::get();
        return view('backend.staff.library.author.index',compact('authors'));
    }

    public function create()
    {
        return view('backend.staff.library.author.store');
    }

    public function store(AuthorStoreRequest $request)
    {
        $author = new Author();
        $author->fullname = $request->fullname;
        $author->save();

        $notification = [
            'message' => 'Yazar Uğurla Əlavə Edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.author.index')->with($notification);
    }
    
    public function edit(Author $author)
    {
        return view('backend.staff.library.author.edit', compact('author'));
    }

    public function update(AuthorUpdateRequest $request, Author $author)
    {
        $author->fullname = $request->fullname;
        $author->save();

        $notification = [
            'message' => 'Yazar uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.author.index')->with($notification);
    }

    public function destroy(Author $author)
    {
        $author->delete();
        $notification = array(
            'message' => 'Yazar uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.library.author.index')->with($notification);
    }

    public function show(Author $author)
    {
        return view('backend.staff.library.author.show', compact('author'));
    }
}
