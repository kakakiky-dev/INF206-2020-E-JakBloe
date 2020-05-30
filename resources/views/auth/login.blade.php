<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/jbfavicon.png" type="image/x-icon">
	<title>JakBloe.com</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!--icon font css-->
	<link rel="stylesheet" href="{{asset('vendors/themify-icon/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/simple-line-icon/simple-line-icons.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/flaticon/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/animation/animate.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/owl-carousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/animation/animate.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/magnify-pop/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/elagent/style.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/scroll/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.navbar-collapse {
	        border-radius: 10px;
	    }
	
	    @media (max-width: 991px) {
	        .search-res {
	            margin: 0 1rem 1rem 1rem;
	        }
	    }
</style>

<body>
	<div class="body_wrapper">
		<header class="header_area">
			<nav class="navbar navbar-expand-lg menu_one menu_four mx-4">
				<a class="navbar-brand sticky_logo pl-4" href="/home">
					<img src="{{asset('img/jakbloewhite1.png')}}" srcset="{{asset('img/logo2x-2.png 2x')}}" alt="logo">
					<img src="{{asset('img/jakbloecolor.png')}}" srcset="{{asset('img/logo2x.png 2x')}}" alt="">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
					<span></span>
					<span></span>
					</span> <span class="hamburger-cross">
                            <span></span>
					<span></span>
					</span>
					</span>
				</button>
				<div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
					<ul class="navbar-nav menu w_menu pl_100">
						<li class="nav-item dropdown submenu mega_menu mega_menu_two active"> <a class="nav-link dropdown-toggle" href="/home" role="button" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
						</li>
						<li class="nav-item dropdown submenu active"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ketentuan
                                </a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a href="/privacy" class="nav-link">Privacy Policy</a>
								</li>
								<li class="nav-item"><a href="/disclaimer" class="nav-link">Disclaimer</a>
								</li>
							</ul>
						</li>
						<li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/about">About Us</a>
						</li>@if(Auth::guest()) @else
						<li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{ route('blog.post', Auth::user()->id) }}">Buat Post</a>
						</li>@endif @if (Auth::guest()) @else
						<li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/profile">Profile Saya</a>
						</li>@endif</li>
					</ul>
				</div>
				<div class="p-1 bg-light " style="border-radius: 30px ">
					<div class="input-group">
						<input type="search" placeholder="Mau Cari apa?" aria-describedby="button-addon1" class="form-control border-0 bg-light" style="border-radius: 30px ">
						<div class="input-group-append">
							<button id="button-addon1" type="submit" class="btn btn-link " style="color: #17d1a6"><i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</div>@if(Auth::user()) @else <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="\login">Masuk</a>
				@endif <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="/register">Daftar</a>
			</nav>
		</header>
		<section class="breadcrumb_area" style="margin-top:-50px;">
			<img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
			<div class="container">
				<div class="breadcrumb_content text-center">
					<h1 class="f_p f_700 f_size_50 w_color l_height50 mb_15">LOGIN PAGE</h1>
					<p class="f_400 w_color f_size_16 l_height26">Silahkan Login Untuk masuk ke Website JakBloe</p>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="card">
									<div class="col-md-16 text-center">
										<img src="img/chjb2.png" alt="" width="100%" height="100%">
									</div>
									<div class="card-header">{{ __('Masuk') }}</div>
									<div class="card-body">
										<form method="POST" action="{{ route('login') }}">@csrf
											<div class="form-group row">
												<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Kamu') }}</label>
												<div class="col-md-6">
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>@error('email') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
													@enderror</div>
											</div>
											<div class="form-group row">
												<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
												<div class="col-md-6">
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">@error('password') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
													@enderror</div>
											</div>
											<div class="form-group row">
												<div class="col-md-6 offset-md-4">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
														<label class="form-check-label" for="remember">{{ __('Ingat Saya') }}</label>
													</div>
												</div>
											</div>
											<div class="form-group row mb-0">
												<div class="col-md-8 offset-md-4">
													<button type="submit" class="btn btn-primary">{{ __('Masuk') }}</button>@if (Route::has('password.request')) <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Kamu Lupa Password?') }}
                                    </a>
													@endif</div>
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
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset('js/propper.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendors/wow/wow.min.js')}}"></script>
		<script src="{{asset('vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
		<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
		<script src="{{asset('vendors/magnify-pop/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('vendors/counterup/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('vendors/counterup/appear.js')}}"></script>
		<script src="{{asset('vendors/circle-progress/circle-progress.js')}}"></script>
		<script src="{{asset('vendors/scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script src="{{asset('js/plugins.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
</body>