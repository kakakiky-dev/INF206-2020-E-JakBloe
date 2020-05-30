@extends('master')

@section('deskripsi')
        <section class="company_banner_area">
            <div class="parallax-effect" style="background: url(img/new/company.jpg);"></div>
            <div class="container">
                <div class="company_banner_content">
                    @if (Auth::user()->file == '')
                    <img src="{{ asset('img/login_img.png') }}" alt="Avatar" style="border-radius: 50%; margin-bottom:20px;" width="150" height="150">
                    @else
                    <img src="{{ asset('img/avatar/'.Auth::user()->file) }}" alt="Avatar" style="border-radius: 50%; margin-bottom:20px;" width="150" height="150">
                    @endif
                    <h6>{{ date('Y-m-d') }}</h6>
                    <h2>Selamat Datang Di JakBloe <br>{{ Auth::user()->name }}</h2>

                    @if (Auth::user()->motto != '')
                    <p class="f_400 w_color f_size_16 l_height26">"{{ Auth::user()->motto }}"</p>
                    @endif
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
                                <a href="{{ route('blog.post', Auth::user()->id) }}">
                                <img src="img/home-10/icon1.png" href="/post" alt=""></a>
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
                            <a href="{{ route('blog.edit', Auth::user()->id) }}">
                                <img src="img/home-10/icon2.png" alt=""></a>
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
                                <a href="/password/reset">
                                <img src="img/home-10/icon3.png" alt=""></a>
                                <h4 class="f_size_20 f_p t_color f_500">Reset Password</h4>
                                <p class="f_400 f_size_15 mb-0">Jaga keamanan akun kamu dengan memperbaharui sandi menjadi lebih kuat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection