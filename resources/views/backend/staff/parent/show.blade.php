@extends('backend.main_master')
@section('content')
@section('title')
    {{ $parent->fullname }} Haqqında Məlumat
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Valideyn</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $parent->fullname }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $parent->fullname }} Haqqında Məlumat</h3>
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input disabled type="text" class="form-control" value={{ $parent->firstname }}>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input disabled type="text" class="form-control" value={{ $parent->lastname }}>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input disabled type="text" class="form-control" value={{ $parent->username }}>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Poçt</label>
                        <input disabled type="email" class="form-control" value={{ $parent->email }}>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input disabled type="password" class="form-control" value={{ $parent->password }}>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select disabled class="select2" name="gender">
                            <option {{ $parent->gender == 0 ? 'selected' : '' }}>Kişi</option>
                            <option {{ $parent->gender == 1 ? 'selected' : '' }}>Qadın</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi</label>
                        <input type="text" name="phone" class="form-control" value={{ $parent->phone }}>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" id="form-message" cols="10" rows="3"
                            disabled>{{ $parent->address }}</textarea>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($parent->photo) }}" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
