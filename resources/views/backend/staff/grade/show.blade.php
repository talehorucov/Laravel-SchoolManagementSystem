@extends('backend.main_master')
@section('content')
@section('title')
    {{ $grade->name }} {{ $grade->section->name }} Haqqında Məlumat
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Sinif</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $grade->name }} {{ $grade->section->name }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    {{ $grade->name }} {{ $grade->section->name }} Haqqında Məlumat
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Sinif *</label>
                        <input type="text" class="form-control" value="{{ $grade->name }}" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Bölmə *</label>
                        <select class="select2" name="section_id" disabled>
                            <option>{{ $grade->section->name }}</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
