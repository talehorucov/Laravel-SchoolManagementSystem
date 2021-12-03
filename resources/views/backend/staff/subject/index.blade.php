@extends('backend.main_master')
@section('content')
@section('title')
    Fənnlər
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Fənnlər</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Bütün Fənnlər</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- All Subjects Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Bütün Fənnlər</h3>
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
                    <div class="col-lg-4 col-12 form-group">
                        <input type="text" placeholder="Search by Exam ..." class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Subject ..." class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <input type="text" placeholder="dd/mm/yyyy" class="form-control">
                    </div>
                    <div class="col-lg-2 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table display text-nowrap">
                    <thead>
                        <tr>
                            <th style="width: 30%">Sıra</th>
                            <th style="width: 40%">Fənn</th>
                            <th style="width: 20%">Dəyişiklik</th>
                        </tr>
                    </thead>
                    <tbody id="subject">
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->name }}</td>
                            <td>
                                <a href="{{ route('staff.subject.edit', $subject) }}"
                                    class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('staff.subject.show', $subject) }}"
                                    class="btn btn-info"><i class="fas fa-question"></i></a>
                                <a href="{{ route('staff.subject.destroy', $subject) }}"
                                    class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination">

            </div>
        </div>
    </div>
    <!-- All Subjects Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection

@section('scripts')
<script src="{{ asset('backend/js/jPages.min.js') }}"></script>
<script>
    $(".pagination").jPages({
        containerID: "subject",
        perPage: 10,
        previous: 'Əvvəlki',
        next: 'Sonraki'
    });
</script>
@endsection