@extends('backend.main_master')
@section('content')
@section('title')
    Bölmələr
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Bölmələr</h3>
        <ul>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Bütün Bölmələr</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Bütün Bölmələr</h3>
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
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Roll ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Class ..." class="form-control">
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
                            <th style="width: 30%">Sıra</th>
                            <th style="width: 40%">Bölmə</th>
                            <th style="width: 20%">Dəyişiklik</th>
                        </tr>
                    </thead>
                    <tbody id="section">
                        @foreach ($sections as $section)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $section->name }}</td>
                                <td>
                                    <a href="{{ route('staff.section.edit', $section) }}" class="btn btn-primary"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('staff.section.show', $section) }}" class="btn btn-info"><i
                                            class="fas fa-question"></i></a>
                                    <a href="{{ route('staff.section.destroy', $section) }}"
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
    <!-- Student Table Area End Here -->
    @include('backend.partials._footer')
</div>
@endsection

@section('scripts')
<script src="{{ asset('backend/js/jPages.min.js') }}"></script>
<script>
    $(".pagination").jPages({
        containerID: "section",
        perPage: 10,
        previous: 'Əvvəlki',
        next: 'Sonraki'
    });
</script>
@endsection
