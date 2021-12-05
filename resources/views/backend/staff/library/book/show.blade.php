@extends('backend.main_master')
@section('content')
@section('title')
    {{ $book->title }} Haqqında Məlumat
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Kitablar</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $book->title }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $book->title }} Haqqında Məlumat</h3>
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Başlıq</label>
                        <input type="text" class="form-control" value="{{ $book->title }}" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Yazar</label>
                        <select class="select2" disabled>
                            <option>{{ $book->author->fullname }}</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Dil</label>
                        <select class="select2" disabled>
                            <option>{{ $book->language->id }}</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Janr(lar)</label>
                        <select class="select2" name="categories[]" multiple disabled>
                            @foreach ($book->categories as $category)
                                <option selected>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Səhifə sayı *</label>
                        <input type="number" value="{{ $book->page }}" class="form-control" disabled>
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($book->cover_photo) }}" alt="">
                    </div>
                    <div class="col-lg-2 col-12 form-group">
                        <label class="text-dark-medium">Hazırki PDF</label>
                        <a href="{{ asset($book->pdf) }}" target="_blank">PDF-ə Bax</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
