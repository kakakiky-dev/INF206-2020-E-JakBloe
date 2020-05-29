@extends('master')

@section('deskripsi')
<section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <div class="container">
                <div class="sign_info">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height50 f_700 t_color">Pembayaran</h2>
                    <p class="f_400 f_size_18 l_height34">Form harus diisi dengan data yang valid dan sesuai</p>
                </div>
                <fieldset>
                                <form action="#" class="login-form sign-in-form" method="post">
                                    @csrf
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Nama</label>
                                        <input type="text" required="required" name="Nama" id="Nama" placeholder="Nama Pemesan">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Alamat</label>
                                        <input type="text" required="required" name="Alamat" id="Alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Nomor Handphone</label>
                                        <input type="number" required="required" name="Handphone" id="Handphone" placeholder="Nomor Handphone / Whatsapp">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400 sr-only">Jumlah</label>
                                        <input type="number" required="required" name="Jumlah" id="Jumlah" placeholder="Jumlah yang ingin dipesan">
                                    </div>
                                    <br>
                                        <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;">BAYAR</button>
                                        <p class="f_400 f_size_18 l_height34" align="center">Silahkan klik tombol Bayar <br> untuk lanjut ke tahap Pembayaran</p>
                                    </form>
                    </fieldset>
                </div>
                </div>
            </div>
        </section>
@endsection