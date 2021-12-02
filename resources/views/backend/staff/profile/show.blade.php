@extends('backend.main_master')
@section('content')
@section('title')
    Haqqımda
@endsection

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Müəllim</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Haqqımda</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Haqqımda</h3>
                </div>
                @if (Auth()->guard('staff')->user()->id == 1)
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('staff.account.edit',$staff->id) }}">
                                <i class="fas fa-cogs text-dark-pastel-green"></i>
                                Düzəliş Et
                            </a>
                        </div>
                    </div>
                @endif

            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="{{ asset('backend/img/figure/teacher.jpg') }}" alt="teacher">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium">{{ Auth()->guard('staff')->user()->fullname }}</h3>
                    </div>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Ad Soyad:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->fullname }}</td>
                                </tr>
                                <tr>
                                    <td>Cinsiyyət:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->gender == 0
    ? 'Kişi'
    : 'Qadın' }}</td>
                                </tr>
                                <tr>
                                    <td>İstifadəçi adı:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Ş/V No:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->identity_no }}</td>
                                </tr>
                                <tr>
                                    <td>Doğum Tarixi</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->dateOfBirth }}</td>
                                </tr>
                                <tr>
                                    <td>Telefon No:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Fənn:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->subject_id }}</td>
                                </tr>
                                <tr>
                                    <td>Məvacib:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->salary }} Azn</td>
                                </tr>
                                <tr>
                                    <td>İşə başlama vaxtı:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->joindate }}</td>
                                </tr>
                                <tr>
                                    <td>Ünvan:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{ Auth()->guard('staff')->user()->address }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->

    <!-- Footer Area Start Here -->
    @include('backend.partials._footer')
    <!-- Footer Area End Here -->
</div>
@endsection
