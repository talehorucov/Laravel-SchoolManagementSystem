@extends('backend.main_master')
@section('content')
@section('title')
    {{ $subject->name }} Haqqında Məlumat
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Valideyn</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $subject->name }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <li>{{ $subject->name }} Haqqında Məlumat</li>
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Fənn *</label>
                        <input type="text" class="form-control" value="{{ $subject->name }}" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
