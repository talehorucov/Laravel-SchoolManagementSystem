@extends('backend.main_master')
@section('content')
@section('title')
    Yeni Kitab Əlavə Et
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Kitablar</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Yeni Kitab Əlavə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Yeni Kitab Əlavə Et</h3>
                </div>
            </div>
            <form enctype="multipart/form-data" class="new-added-form" method="POST"
                action="{{ route('staff.library.book.store') }}">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Başlıq *</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Yazar *</label>
                        <select class="select2" name="author_id">
                            <option value="">Yazar Seçin *</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->fullname }}</option>
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
                            <option value="">Dil Seçin *</option>
                            @foreach ($book_languages as $book_language)
                                <option value="{{ $book_language->id }}">{{ $book_language->language }}</option>
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
                            @foreach ($book_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                        <input type="number" name="page" min="0" class="form-control">
                        @error('page')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Şəkil *</label>
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
                    <div class="col-3 mg-t-25 form-group">
                        <label></label>
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Əlavə
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
