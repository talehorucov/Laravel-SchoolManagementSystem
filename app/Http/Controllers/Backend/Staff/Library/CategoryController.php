<?php

namespace App\Http\Controllers\Backend\Staff\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Library\CategoryStoreRequest;
use App\Http\Requests\Backend\Library\CategoryUpdateRequest;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $book_categories = BookCategory::get();
        return view('backend.staff.library.category.index',compact('book_categories'));
    }

    public function create()
    {
        return view('backend.staff.library.category.store');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = new BookCategory();
        $category->name = $request->name;
        $category->save();

        $notification = [
            'message' => 'Kateqoriya uğurla əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.category.index')->with($notification);
    }
    
    public function edit(BookCategory $category)
    {
        return view('backend.staff.library.category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, BookCategory $category)
    {
        $category->name = $request->name;
        $category->save();

        $notification = [
            'message' => 'Kateqoriya uğurla redaktə əlavə edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('staff.library.category.index')->with($notification);
    }

    public function destroy(BookCategory $category)
    {
        $category->delete();
        $notification = array(
            'message' => 'Kateqoriya uğurla silindi',
            'alert-type' => 'success'
        );
        return redirect()->route('staff.library.category.index')->with($notification);
    }

    public function show(BookCategory $category)
    {
        return view('backend.staff.library.category.show', compact('category'));
    }
}
