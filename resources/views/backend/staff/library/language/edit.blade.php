@extends('backend.main_master')
@section('content')
@section('title')
    {{ $language->language }} Redaktə Et
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Kitab Dilləri</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $language->language }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $language->language }} Redaktə Et</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.library.language.update',$language) }}">
                @csrf
                <div class="row">
                    <div class="col-xl-9 col-lg-6 col-12 form-group">
                        <label>Yazar *</label>
                        <input type="text" name="language" value="{{ $language->language }}" class="form-control">
                        @error('language')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-3 mg-t-25 form-group">
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
