<?php

namespace App\Http\Controllers\Backend\Staff\Library;

use App\Models\Book;
use App\Models\Author;
use Ramsey\Uuid\Guid\Guid;
use App\Models\BookCategory;
use App\Models\BookLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\Library\BookStoreRequest;
use App\Http\Requests\Backend\Library\BookUpdateRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        return view('backend.staff.library.book.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::get();
        $book_languages = BookLanguage::get();
        $book_categories = BookCategory::get();
        return view('backend.staff.library.book.store', compact('authors', 'book_languages', 'book_categories'));
    }

    public function store(BookStoreRequest $request)
    {
        $image = $request->file('cover_photo');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(600, 800)->save('uploads/books/photo/' . $image_name);
        $image_url = 'uploads/books/photo/' . $image_name;

        $pdf = $request->file('pdf');
        $pdf_name = hexdec(uniqid()) . '.pdf';
        $pdf_url = 'uploads/books/pdf/' . $pdf_name;
        $pdf->move('uploads/books/pdf/', $pdf_name);

        $book = new Book();
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->book_language_id = $request->book_language_id;
        $book->page = $request->page;
        $book->cover_photo = $image_url;
        $book->pdf = $pdf_url;
        $book->save();

        $book->categories()->attach($request->categories);

        $notification = [
            'message' => 'Kitab uğurla əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.book.index')->with($notification);
    }

    public function edit(Book $book)
    {
        $authors = Author::get();
        $book_languages = BookLanguage::get();
        $book_categories = BookCategory::get();
        return view('backend.staff.library.book.edit', compact('book', 'authors', 'book_languages', 'book_categories'));
    }

    public function update(BookUpdateRequest $request, Book $book)
    {
        $image = $request->file('cover_photo');
        $pdf = $request->file('pdf');
        if ($image) {
            File::delete($book->cover_photo);
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 800)->save('uploads/books/' . $image_name);
            $image_url = 'uploads/books/' . $image_name;
            $book->cover_photo = $image_url;
        }
        if ($pdf) {
            File::delete($book->pdf);
            $pdf_name = hexdec(uniqid()) . '.pdf';
            $pdf_url = 'uploads/books/pdf/' . $pdf_name;
            $pdf->move('uploads/books/pdf/', $pdf_name);
            $book->pdf = $pdf_url;
        }

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->book_language_id = $request->book_language_id;
        $book->page = $request->page;
        $book->save();

        $book->categories()->sync($request->categories);

        $notification = [
            'message' => 'Kitab uğurla redaktə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.book.index')->with($notification);
    }

    public function destroy(Book $book)
    {
        $book->categories()->wherePivot('book_id',$book->id)->detach();
        $book->delete();
        File::delete($book->pdf);
        File::delete($book->cover_photo);
        $notification = array(
            'message' => 'Kitab uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.library.book.index')->with($notification);
    }

    public function show(Book $book)
    {
        return view('backend.staff.library.book.show', compact('book'));
    }
}
