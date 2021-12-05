@extends('backend.main_master')
@section('content')
@section('title')
    Kitab Dilləri
@endsection
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area-create">
        <ul>
            <h3>Kitab Dilləri</h3>
            <li>
                <a href="/">Ana Səhifə</a>
            </li>
            <li>Bütün Kitab Dilləri</li>
            <div style="float: right" class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                <a href="{{ route('staff.library.language.create') }}" type="submit" class="fw-btn-fill btn-gradient-green" style="color: white; text-align:center"><i style="font-size: 17px" class="fas fa-plus-circle text-white"></i>  Yeni Dil</a>
            </div>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Bütün Kitab Dilləri</h3>
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
                            <th style="width: 20%">Sıra</th>
                            <th style="width: 60%">Dil</th>
                            <th style="width: 20%">Dəyişiklik</th>
                        </tr>
                    </thead>
                    <tbody id="book_language">
                        @foreach ($book_languages as $language)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $language->language }}</td>
                                <td>
                                    <a href="{{ route('staff.library.language.edit', $language) }}" class="btn btn-primary"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('staff.library.language.show', $language) }}" class="btn btn-info"><i
                                            class="fas fa-question"></i></a>
                                    <a href="{{ route('staff.library.language.destroy', $language) }}"
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
        containerID: "book_language",
        perPage: 10,
        previous: 'Əvvəlki',
        next: 'Sonraki'
    });
</script>
@endsection
