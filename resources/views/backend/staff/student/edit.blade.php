@extends('backend.main_master')
@section('content')
@section('title')
    {{ $student->fullname }} Redaktə Et
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Şagird</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>{{ $student->fullname }} Redaktə Et</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ $student->fullname }} Redaktə Et</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{ route('staff.student.update', $student) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input type="text" name="firstname" value="{{ $student->firstname }}" class="form-control">
                        @error('firstname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input type="text" name="lastname" value="{{ $student->lastname }}" class="form-control">
                        @error('lastname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>İstifadəçi adı *</label>
                        <input type="text" name="username" value="{{ $student->username }}" class="form-control">
                        @error('username')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Şifrə *</label>
                        <input type="password" name="password" value="{{ $student->password }}"
                            class="form-control">
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2" name="gender">
                            <option {{ $student->gender == 0 ? 'selected' : '' }} value="0">Kişi</option>
                            <option {{ $student->gender == 1 ? 'selected' : '' }} value="1">Qadın</option>
                        </select>
                        @error('gender')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Doğum Tarixi *</label>
                        <input name="dateOfBirth" type="date" value="{{ $student->dateOfBirth }}"
                            class="form-control">
                        @error('dateOfBirth')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Əlaqə Nömrəsi</label>
                        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                        @error('phone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Valideyn *</label>
                        <select class="select2" name="parent_id">
                            <option value="">Valideyn Seçin *</option>
                            @foreach ($parents as $parent)
                                <option {{ $student->parent_id == $parent->id ? 'selected' : '' }}
                                    value="{{ $parent->id }}">{{ $parent->fullname }}</option>
                            @endforeach
                        </select>
                        @error('parent_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Sinif</label>
                        <select class="select2" name="grade_id">
                            <option value="">Sinif Seçin *</option>
                            @foreach ($grades as $grade)
                                <option {{ $student->grade_id == $grade->id ? 'selected' : '' }}
                                    value="{{ $grade->id }}">{{ $grade->name }} {{ $grade->section->name }}</option>
                            @endforeach
                        </select>
                        @error('grade_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 form-group">
                        <label>Ünvan</label>
                        <textarea class="textarea form-control" name="address" id="form-message" cols="10"
                            rows="3">{{ $student->address }}</textarea>
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
                        <img style="height: 150px" src="{{ asset($student->photo) }}" alt="">
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
