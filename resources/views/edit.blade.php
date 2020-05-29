@extends('master')

@section('deskripsi')
<section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                </div>
                <div class="container">
                <div class="sign_info">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height50 f_700 t_color">Edit Profile</h2>
                    <p class="f_400 f_size_18 l_height34">Silahkan perbaharui profile Dengan data yang valid</p>
                </div>
                <fieldset>
                                <form action="/edit" class="login-form sign-in-form" method="post" enctype="multipart/form-data">
                                @method ('patch')
                                    @csrf
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Nama</label>
                                        <input type="text" required="required" name="name" id="name" placeholder="Nama" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Email</label>
                                        <input type="text" required="required" name="email" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Nomor Handphone</label>
                                        <input type="number" required="required" name="Nomorhp" id="Nomorhp" placeholder="Nomor Handphone" value="{{ Auth::user()->Nomorhp }}">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Motto</label>
                                        <input type="text" required="required" name="Motto" id="Motto" placeholder="Motto Kamu" value="{{ Auth::user()->Motto }}">
                                    </div>
                                    <div class="form-group text_box">
                                    <input class="form-group text_box" type="file" id="file" name="file"> Upload Foto Profile
                                    </div>
                                        <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;">Update Profile</button>
                                </form>
                </fieldset>
            </div>
            </div>
        </section>
@endsection