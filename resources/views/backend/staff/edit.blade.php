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
            <form class="new-added-form">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Ad *</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Soyad *</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Cinsiyyət *</label>
                        <select class="select2">
                            <option value="">Please Select Gender *</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>ID No</label>
                        <input type="text" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Blood Group *</label>
                        <select class="select2">
                            <option value="">Please Select Group *</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="3">B-</option>
                            <option value="3">O+</option>
                            <option value="3">O-</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Religion *</label>
                        <select class="select2">
                            <option value="">Please Select Religion *</option>
                            <option value="1">Islam</option>
                            <option value="2">Hindu</option>
                            <option value="3">Christian</option>
                            <option value="3">Buddish</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Class *</label>
                        <select class="select2">
                            <option value="">Please Select Class *</option>
                            <option value="1">Play</option>
                            <option value="2">Nursery</option>
                            <option value="3">One</option>
                            <option value="3">Two</option>
                            <option value="3">Three</option>
                            <option value="3">Four</option>
                            <option value="3">Five</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Section *</label>
                        <select class="select2">
                            <option value="">Please Select Section *</option>
                            <option value="1">Pink</option>
                            <option value="2">Blue</option>
                            <option value="3">Bird</option>
                            <option value="3">Rose</option>
                            <option value="3">Red</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="" class="form-control">
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label>Short BIO</label>
                        <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                            rows="9"></textarea>
                    </div>
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                        <input type="file" class="form-control-file">
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