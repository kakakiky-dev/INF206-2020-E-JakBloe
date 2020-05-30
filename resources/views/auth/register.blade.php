<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/jbfavicon.png" type="image/x-icon">
    <title>JakBloe.com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="vendors/simple-line-icon/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/all.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="vendors/elagent/style.css">
    <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four mx-4">
                    <a class="navbar-brand sticky_logo pl-4" href="/home"><img src="img/jakbloewhite1.png" srcset="img/logo2x-2.png 2x" alt="logo"><img src="img/jakbloecolor.png" srcset="img/logo2x.png 2x" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                    <ul class="navbar-nav menu w_menu pl_100">
                        <li class="nav-item dropdown submenu mega_menu mega_menu_two active">
                            <a class="nav-link dropdown-toggle" href="/home" role="button" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ketentuan
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/privacy" class="nav-link">Privacy Policy</a></li>
                                    <li class="nav-item"><a href="/disclaimer" class="nav-link">Disclaimer</a></li>
                                </ul>
                            </li>
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/about">About Us</a>
                        </li>
                        @if(Auth::guest())
                        @else
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{ route('blog.post', Auth::user()->id) }}">Buat Post</a>
                        </li>
                        @endif
                        @if (Auth::guest())
                        @else
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/profile">Profile Saya</a>
                        </li>
                        @endif
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <form action="cari" method="get" enctype="multipart/form-data">
                        <li class="search-res">
                            <div class="p-1 bg-light mb-1" style="border-radius: 30px ">
                                <div class="input-group">
                                    <input type="search" name="cari" placeholder="Mau Cari apa?" aria-describedby="button-addon1" class="form-control border-0 bg-light" style="border-radius: 30px ">
                                    <div class="input-group-append">
                                        <button id="button-addon1" type="submit" class="btn btn-link " style="color: #17d1a6"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </li>
                    </ul>
                    @if(Auth::user())
                    @else
                    <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="\login">Masuk</a>
                    @endif
                    <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs"  href="/register">Daftar</a>
            </nav>
        </header>

<section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">REGISTER PAGE</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Silahkan Registrasi Untuk Menggunakan Fitur Website JakBloe</p>
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </section>