@extends('backend.main_master')
@section('content')
@section('title')
    Şagirdlər
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Şagirdlər</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Bütün Şagirdlər</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Bütün Şagirdlər</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display text-nowrap">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Ad Soyad</th>
                            <th>İstifadəçi adı</th>
                            <th>E-poçt</th>
                            <th>Valideyn</th>
                            <th>Sinif</th>
                            <th>Bölmə</th>
                            <th>Cinsiyyət</th>
                            <th>Dəyişiklik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->username }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->parent->fullname }}</td>
                                <td>{{ $student->class->name }}</td>
                                <td>{{ $student->class->section->name }}</td>
                                <td>{{ $student->gender == 0 ? 'Oğlan' : 'Qız' }}</td>
                                <td>
                                    <a href="/" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/" class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="links">
        {{ $students->links() }}
    </div>
    <!-- Student Table Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection
