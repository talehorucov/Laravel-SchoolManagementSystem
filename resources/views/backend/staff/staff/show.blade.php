@extends('backend.main_master')
@section('content')
@section('title')
    {{ $staff->fullname }} Haqqında Məlumat
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Şagird</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $staff->fullname }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $staff->fullname }} Haqqında Məlumat</h3>
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input value="{{ $staff->firstname }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input value="{{ $staff->lastname }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input value="{{ $staff->username }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input value="{{ $staff->email }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2" disabled>
                            <option {{ $staff->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $staff->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Doğum Tarixi *</label>
                        <input type="date" value="{{ $staff->dateOfBirth }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi *</label>
                        <input type="text" value="{{ $staff->phone }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ş/V Seriya No *</label>
                        <input type="text" value="{{ $staff->identity_no }}" class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Fənn</label>
                        <select class="select2" name="subject_id" disabled>
                            <option>{{ $staff->subject ? $staff->subject->name : 'Qeyd Edilməyib'}}</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Məvacib</label>
                        <input value="{{ $staff->salary }}" class="form-control" disabled>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" id="form-message" cols="10"
                            rows="3" disabled>{{ $staff->address }}</textarea>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($staff->photo) }}" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->

    @include('backend.partials._footer')
</div>
@endsection
