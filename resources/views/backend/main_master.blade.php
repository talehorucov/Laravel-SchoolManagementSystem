<!doctype html>
<html class="no-js" lang="az">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backend.partials._css')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">

        <!-- Header Menu Area Start Here -->
        @include('backend.partials._header')
        <!-- Header Menu Area End Here -->

        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('backend.partials._sidebar')
            <!-- Sidebar Area End Here -->
            @yield('content')

            <!-- Footer Area In Content -->

        </div>
        <!-- Page Area End Here -->
    </div>
    @include('backend.partials._js')
</body>

</html>