@extends('backend.main_master')
@section('content')
@section('title')
    {{ $staff->fullname }} Redaktə Et
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Şagird</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $staff->fullname }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $staff->fullname }} Redaktə Et</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.staff.update', $staff) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input type="text" name="firstname" value="{{ $staff->firstname }}" class="form-control">
                        @error('firstname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input type="text" name="lastname" value="{{ $staff->lastname }}" class="form-control">
                        @error('lastname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input type="text" name="username" value="{{ $staff->username }}" class="form-control">
                        @error('username')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ $staff->email }}" class="form-control">
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input type="password" name="password" value="{{ $staff->password }}" class="form-control">
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2" name="gender">
                            <option {{ $staff->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $staff->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                        @error('gender')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Doğum Tarixi *</label>
                        <input name="dateOfBirth" type="date" value="{{ $staff->dateOfBirth }}"
                            class="form-control">
                        @error('dateOfBirth')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi *</label>
                        <input type="text" name="phone" value="{{ $staff->phone }}" class="form-control">
                        @error('phone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ş/V Seriya No *</label>
                        <input type="text" name="identity_no" value="{{ $staff->identity_no }}" class="form-control">
                        @error('identity_no')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Fənn</label>
                        <select class="select2" name="subject_id">
                            <option value="">Fənn Seçin *</option>
                            @foreach ($subjects as $subject)
                                <option {{ $staff->subject_id == $subject->id ? 'selected' : '' }}
                                    value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        @error('subject_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Məvacib</label>
                        <input type="number" inputmode="decimal" value="{{ $staff->salary }}" min="0" name="salary"
                            class="form-control" step="any">
                        @error('salary')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" name="address" id="form-message" cols="10"
                            rows="3">{{ $staff->address }}</textarea>
                        @error('address')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Şəkil</label>
                        <input type="file" name="photo" class="form-control-file">
                        @error('photo')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label class="text-dark-medium">Hazırki Şəkil</label>
                        <img style="height: 150px" src="{{ asset($staff->photo) }}" alt="">
                    </div>
                    <div class="col-12 form-group">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                            Redaktə Et</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->

    @include('backend.partials._footer')
</div>
@endsection
