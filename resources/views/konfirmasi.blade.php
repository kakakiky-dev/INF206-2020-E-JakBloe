@extends('master')
@section('deskripsi')
<section class="new_startup_banner_area">
    <div class="container mt_100">
        <br>
        <br>
        <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20 text-center">Lakukan Pembayaran</h1>
        <p class="f_400 w_color f_size_16 l_height26 text-center">Terima kasih sudah melakukan pemesanan!<br>Silahkan
            lakukan pembayaran ke nomor rekening berikut:</p>
        <div class="col-md-16 text-center">
            <div class="btn btn-light">
                <span class="f_400 b_color f_size_16 l_height26 text-center"><i class="fas fa-dollar-sign"></i>
                    3908-01-008813-53-9</span>
            </div>
            <p class="f_400 w_color f_size_16 l_height26 text-center" style="margin-top: 10px;">A/N NAZIRA REZKY AFIFAH
            </p>
            <img src="img/chpembayaran.png" alt="Pembayaran" style="width:20%;height:20%; margin-top: -50px;">
            <form action="{{route('blog.gambarkonfirmasi',$id)}}" class="login-form sign-in-form" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group text_box">
                    <label class="f_400 w_color f_size_16 l_height26 text-center">Upload Bukti Pembayaran</label>
                    <br>
                    <input class="form-group text_box text-white text-center" type="file" name="file" id="file">
                </div>
                @foreach($isi as $i)
                <button class="btn btn-lg btn-success btn-block" type="submit" name="search" value="{{$i->id}}"
                    style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;">Konfirmasi
                    Pembayaran</button>
                @endforeach
                <button class="btn btn-lg btn-success btn-block" type="submit"
                    style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;">Batalkan
                    Pembayaran</button>
            </form>
            <br>
            <br>
            <br>
        </div>
    </div>
</section>
@endsection
