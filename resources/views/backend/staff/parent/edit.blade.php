@extends('backend.main_master')
@section('content')
@section('title')
    {{ $parent->fullname }} Redaktə Et
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Valideyn</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $parent->fullname }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $parent->fullname }} Redaktə Et</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.parent.update',$parent->username) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input type="text" name="firstname" class="form-control" value={{ $parent->firstname }}>
                        @error('firstname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input type="text" name="lastname" class="form-control" value={{ $parent->lastname }}>
                        @error('lastname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input type="text" name="username" class="form-control" value={{ $parent->username }}>
                        @error('username')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" class="form-control" value={{ $parent->email }}>
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input type="password" name="password" class="form-control" value={{ $parent->password }}>
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2" name="gender">
                            <option {{ $parent->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $parent->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                        @error('gender')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi</label>
                        <input type="text" name="phone" class="form-control" value={{ $parent->phone }}>
                        @error('phone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" name="address" id="form-message" cols="10"
                            rows="3">{{ $parent->address }}</textarea>
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
                        <img style="height: 150px" src="{{ asset($parent->photo) }}" alt="">
                    </div>
                    <div class="col-12 form-group">
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
