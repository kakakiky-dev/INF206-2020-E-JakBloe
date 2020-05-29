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
                <a class="navbar-brand sticky_logo pl-4" href="/home"><img src="{{asset('img/jakbloewhite1.png')}}" srcset="{{asset('img/logo2x-2.png 2x')}}" alt="logo"><img src="{{asset('img/jakbloecolor.png')}}" srcset="{{asset('img/logo2x.png 2x')}}" alt=""></a>
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
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/about">About Us</a>
                        </li>
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/disclaimer">Disclaimer</a>
                        </li>
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/privacy">Privacy Policy</a>
                        </li>
                        @if(Auth::guest())
                        @else
                        <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/post">Buat Post</a>
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
                        <li class="search-res">
                            <div class="p-1 bg-light mb-1" style="border-radius: 30px ">
                                <div class="input-group">
                                    <input type="search" placeholder="Mau Cari apa?" aria-describedby="button-addon1" class="form-control border-0 bg-light" style="border-radius: 30px ">
                                    <div class="input-group-append">
                                        <button id="button-addon1" type="submit" class="btn btn-link " style="color: #17d1a6"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <ul>


                </div>



                @if(Auth::user())
                @else
                <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="\login">Masuk</a>
                <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="\register">Daftar</a>
                @endif

                @if (Auth::guest())
                @else
                <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Keluar') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
            </nav>
        </header>

        @yield('deskripsi')

        <footer class="payment_footer_area payment_footer_area_two">
            <div class="footer_top_six">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget company_widget">
                                <a href="index.html" class="f-logo"><img src="img/jakbloewhite1.png" srcset="img/logo-3-2x.png 2x" alt="logo"></a>
                                <p class="mt_40">Jakbloe adalah sebuah website sebagai wadah untuk membeli barang secara massal. Sehingga harga barang yang didapatkan menjadi lebih murah. Ayo segera bergabung bersama kami!<br>
                                    <h6 style="color:white;">Copyright © 2020 Jakbloe.com</h6>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">About Us</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Desktop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">Help?</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Term & conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget social-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">Follow Us</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="ti-facebook"></a>
                                    <a href="#" class="ti-twitter-alt"></a>
                                    <a href="#" class="ti-vimeo-alt"></a>
                                    <a href="#" class="ti-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

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

</html>