@extends('backend.main_master')
@section('content')
@section('title')
    {{ $student->fullname }} Haqqında Məlumat
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Şagird</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $student->fullname }} Haqqında Məlumat</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $student->fullname }} Haqqında Məlumat</h3>
                </div>
            </div>
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input disabled type="text" value="{{ $student->firstname }}" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input disabled type="text" value="{{ $student->lastname }}" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input disabled type="text" value="{{ $student->username }}" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input disabled type="email" value="{{ $student->email }}" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input disabled type="text" value="{{ $student->password }}"
                            class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select disabled class="select2" name="gender">
                            <option {{ $student->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $student->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Doğum Tarixi *</label>
                        <input name="dateOfBirth" type="date" value="{{ $student->dateOfBirth }}"
                            class="form-control" disabled>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi</label>
                        <input disabled type="text" value="{{ $student->phone }}" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Valideyn *</label>
                        <select disabled class="select2">
                            <option>{{ $student->parent->fullname }}</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Sinif</label>
                        <select disabled class="select2" name="class_id">
                            <option>{{ $student->class->name }} {{ $student->class->section->name }}</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" id="form-message" cols="10"
                            rows="3" disabled>{{ $student->address }}</textarea>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Son Giriş Tarixi</label>
                        <input name="dateOfBirth" type="datetime-local" value="{{ $student->lastLoginDate }}"
                            class="form-control" disabled>
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($student->photo) }}" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->

    @include('backend.partials._footer')
</div>
@endsection
