@extends('master')

@section('deskripsi')
<section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Buat Postingan</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Isi Form Berikut Dengan Data Yang Benar</p>
                </div>
            </div>
        </section>

        <section class="payment_features_two sec_pad">
            <div class="container">
                <div class="sign_info">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height50 f_700 t_color">Buat Postingan</h2>
                    <p class="f_400 f_size_18 l_height34">Lengkapi Data Berikut<br>Untuk Membuat Postingan Baru </p>
                </div>
                <fieldset>
                                <form action="/insert" class="login-form sign-in-form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Nama</label>
                                        <input type="text" required="required" name="Nama" id="Nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Judul Postingan</label>
                                        <input type="text" required="required" name="Judul" id="Judul" placeholder="Judul Postingan">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Target Pembelian</label>
                                        <input type="number" required="required" name="Target" id="Target" placeholder="Target Pembelian (kg)">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Harga</label>
                                        <input type="number" required="required" name="Harga" id="Harga" placeholder="Harga Barang / kg">
                                    </div>
                                    <div class="form-group text_box">
                                    <input class="form-group text_box" type="file" id="file" name="file"> Masukkan Gambar Postingan (Max 5 Mb):
                                    </div>
                                        <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;">Buat Postingan</button>
                                </form>
                </fieldset>
            </div>
</section>
@endsection