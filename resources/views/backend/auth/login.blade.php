<!doctype html>
<html class="no-js" lang="az">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.partials._css')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ asset('backend/img/logo2.png') }}" alt="logo">
                </div>
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label>İstifadəçi adı</label>
                        <input type="text" name="username" placeholder="İstifadəçi adı" class="form-control">
                        <i class="far fa-user"></i>
                        @error('username')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Şifrə</label>
                        <input type="password" name="password" placeholder="Şifrə" class="form-control">
                        <i class="fas fa-lock"></i>
                        @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if ($message = session('error'))
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @endif
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <a href="#" class="forgot-btn">Şifrəmi Unutdum</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Daxil Ol</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Login Page End Here -->
        @include('backend.partials._js')

</body>

</html>
