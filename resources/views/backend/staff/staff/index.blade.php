@extends('backend.main_master')
@section('content')
@section('title')
    Müəllimlər
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Müəllimlər</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Müəllimlər</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Müəllimlər</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by ID ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Phone ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table display text-nowrap">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Ad Soyad</th>
                            <th>İstifadəçi adı</th>
                            <th>Cinsiyyət</th>
                            <th>E-poçt</th>
                            <th>Fənn</th>
                            <th>Dəyişiklik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $staff->fullname}}</td>
                            <td>{{ $staff->username }}</td>
                            <td>{{ $staff->gender == 0 ? 'Kişi' : 'Qadın' }}</td>
                            <td>{{ $staff->email }}</td>
                            <td @if(!$staff->subject) class="text-danger" @endif>{{ $staff->subject ? $staff->subject->name : 'Yoxdur'}}</td>
                            <td>
                                <a href="{{ route('staff.staff.edit',$staff->username) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('staff.staff.show',$staff->username) }}" class="btn btn-info"><i class="fas fa-question"></i></a>
                                <a href="{{ route('staff.staff.destroy',$staff->username) }}" class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="links">
        {{ $staffs->links() }}
    </div>
    <!-- Teacher Table Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
