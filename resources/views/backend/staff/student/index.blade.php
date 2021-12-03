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
            </div>
            <div class="table-responsive">
                <table class="table display text-nowrap">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Ad Soyad</th>
                            <th>İstifadəçi adı</th>
                            <th>Valideyn</th>
                            <th>Sinif</th>
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
                                <td>{{ $student->parent->fullname }}</td>
                                <td>{{ $student->grade->name }} {{ $student->grade->section->name }}</td>
                                <td>{{ $student->gender == 0 ? 'Oğlan' : 'Qız' }}</td>
                                <td>
                                    <a href="{{ route('staff.student.edit',$student->username) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('staff.student.show',$student->username) }}" class="btn btn-info"><i class="fas fa-question"></i></a>
                                    <a href="{{ route('staff.student.destroy',$student->username) }}" class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
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
