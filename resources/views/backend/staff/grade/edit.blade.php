@extends('backend.main_master')
@section('content')
@section('title')
    {{ $grade->name }} {{ $grade->section->name }} Redaktə Et
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Sinif</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $grade->name }} {{ $grade->section->name }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <li>{{ $grade->name }} {{ $grade->section->name }} Redaktə Et</li>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.grade.update', $grade) }}">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Sinif *</label>
                        <input type="text" name="name" class="form-control" value="{{ $grade->name }}">
                        @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Bölmə *</label>
                        <select class="select2" name="section_id">
                            <option value="">Bölmə Seçin *</option>
                            @foreach ($sections as $section)
                                <option {{ $grade->section->id == $section->id ? 'selected' : '' }}
                                    value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach
                        </select>
                        @error('section_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-4 mg-t-25 form-group">
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
