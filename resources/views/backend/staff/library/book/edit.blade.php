@extends('backend.main_master')
@section('content')
@section('title')
    {{ $book->title }} Redaktə Et
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Kitablar</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $book->title }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $book->title }} Redaktə Et</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.library.book.update', $book) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Başlıq *</label>
                        <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                        @error('title')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Yazar *</label>
                        <select class="select2" name="author_id">
                            @foreach ($authors as $author)
                                <option {{ $book->author_id == $author->id ? 'selected' : '' }}
                                    value="{{ $author->id }}">{{ $author->fullname }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Dil *</label>
                        <select class="select2" name="book_language_id">
                            @foreach ($book_languages as $book_language)
                                <option {{ $book->book_language_id == $book_language->id ? 'selected' : '' }}
                                    value="{{ $book_language->id }}">{{ $book_language->language }}</option>
                            @endforeach
                        </select>
                        @error('book_language_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Janr(lar) *</label>
                        <select class="select2" name="categories[]" multiple>
                            <option value="">Janr(lar) Seçin *</option>
                            @foreach ($book_categories as $category)
                                <option value="{{ $category->id }}" 
                                    @foreach ($book->categories as $book_category)
                                        {{ $book_category->id == $category->id ? 'selected' : '' }}
                                    @endforeach >
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('book_category_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Səhifə sayı *</label>
                        <input type="number" name="page" min="0" value="{{ $book->page }}" class="form-control">
                        @error('page')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Şəkil</label>
                        <input type="file" name="cover_photo" class="form-control-file">
                        @error('cover_photo')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Pdf *</label>
                        <input type="file" name="pdf" class="form-control-file">
                        @error('pdf')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($book->cover_photo) }}" alt="">
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki PDF</label>
                        <a href="{{ asset($book->pdf) }}" target="_blank">PDF-ə Bax</a>
                    </div>
                    <div class="col-12 mg-t-25 form-group">
                        <label></label>
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Redaktə
                            Et</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
