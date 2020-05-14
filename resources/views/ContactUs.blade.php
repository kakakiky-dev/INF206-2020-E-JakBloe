@extends('master')

@section('deskripsi')
<section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contact Us</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Silahkan kirimkan Keluhan dibawah ini agar admin segera memperbaikinya.</p>
                    <form>
                <div class="form-row">
                  <div class="col form-group">
                    <input type="text" class="form-control" placeholder="Nama Depan">
                  </div>
                  <div class="col form-group">
                    <input type="text" class="form-control" placeholder="Nama belakang">
                  </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="inputAddress" style="height:320px"; placeholder="Keluhan"> </textarea>
                  </div>
              </form>
              <a class="btn btn-success" style="align-content: left; width: 100%" href="#">Submit</a>
                </div>
            </div>
        </section>

    @endsection