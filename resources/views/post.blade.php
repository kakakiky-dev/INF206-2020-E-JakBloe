@extends('master')

@section('deskripsi')
    <div class="container col-6">
        <fieldset>
            <form class="form-pesan" method="post">
            @csrf
                <h3 align="center"><br><br> Lengkapi Data Berikut <br> Untuk Membuat Postingan Baru <br><br></h1>
                <label  for="Nama Pemesanan" class="sr-only">Nama Pemesan</label>
                <input type="text" name="Nama Pemesanan" id="Nama Pemesanan" class="form-control" placeholder="Nama Pemesanan" required>
                <br>
                <label for="Judul Postingan" class="sr-only">Judul Postingan</label>
                <input type="text" name="Judul Postingan" id="Judul Postingan" class="form-control" placeholder="Judul Postingan" required>
                <br>
                <label for="Target Pembelian (Kg)" class="sr-only">Target Pembelian (Kg)</label>
                <input type="numeric" name="Target Pembelian" id="Target Pembelian" class="form-control" placeholder="Target Pembelian (Kg)" required autofocus>
                <br>
                <label for="Harga" class="sr-only">Harga</label>
                <input type="numeric" name="Harga" id="Harga" class="form-control" placeholder="Harga" required>
                <br>
                <label  for="Jenis Barang" class="sr-only">Jenis Barang</label>
                <input type="text" name="Jenis Barang" id="Jenis Barang" class="form-control" placeholder="Jenis Barang" required>
                <br> <br> 
                <p align="center">Masukkan Gambar Postingan <br> Max 5mb</p>
                <br>
            <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;"
                >Buat Postingan</button>
        </fieldset>
    </form>
        </div>
@endsection