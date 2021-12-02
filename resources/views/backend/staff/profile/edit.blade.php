@extends('backend.main_master')
@section('content')
@section('title')
    Düzəliş Et
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Müəllim</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Düzəliş Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.account.update',$staff) }}">
                @csrf
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input type="text" name="firstname" value="{{ $staff->firstname }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input type="text" name="lastname" value="{{ $staff->lastname }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input type="text" name="username" value="{{ $staff->username }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ $staff->email }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input type="password" name="password" value=" " class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Şəxsiyyət No *</label>
                        <input type="text" name="identity_no" value="{{ $staff->identity_no }}"  class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2" name="gender">                            
                            <option {{ $staff->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $staff->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Doğum Tarixi</label>
                        <input value="{{ $staff->dateOfBirth }}" name="dateOfBirth" type="text" class="form-control air-datepicker">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi *</label>
                        <input type="text" name="phone" value="{{ $staff->phone }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Məvacib *</label>
                        <input type="number" name="salary" value="{{ $staff->salary }}" min="0" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Tədris Etdiyi Fənn</label>
                        <select class="select2" name="subject_id">
                            <option value="">Fənn Seçin *</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>İşdən Ayrıldığı Tarix</label>
                        <input name="leave_date" type="date" placeholder="gün/ay/il" class="form-control air-datepicker">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" name="address" id="form-message" cols="10"
                            rows="9"></textarea>
                    </div>
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label class="text-dark-medium">Şəkil</label>
                        <input type="file" name="photo" class="form-control-file">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    
    @include('backend.partials._footer')
</div>
@endsection