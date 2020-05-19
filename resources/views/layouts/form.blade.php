<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Pemesanan JakBloe</title>

    <style>
        input[type=text], input[type=password], input [type=numeric],input[type=numeric] {
            margin: 5px auto;
            width: 300px;
            padding: 10px;
            border-radius: 40px;
            }

        

    </style>
</head>
<body>
    <div class="container col-6">
        <fieldset>
            <form class="form-pesan" method="post">
            @csrf
                <h3 align="center"><br><br>Isi Form Berikut <br> Dengan Data Yang Benar <br><br></h1>
                <label  for="Nama" class="sr-only">Nama Pemesan</label>
                <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Nama" required>
                <br>
                <label for="Alamat" class="sr-only">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Alamat" required>
                <br>
                <label for="Nomor Handphone" class="sr-only">Nomor Handphone</label>
                <input type="numeric" name="Nomor Handphone" id="Nomor Handphone" class="form-control" placeholder="Nomor Handphone" required autofocus>
                <br>
                <label for="Jumlah" class="sr-only">Jumlah</label>
                <input type="numeric" name="Jumlah" id="Jumlah" class="form-control" placeholder="Jumlah(Kg)" required>
                <br>
            <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius: 40px; width: 300px; padding: 10px;margin: 5px auto;"
                >BAYAR</button>
        <p align="center">Silahkan klik tombol Bayar <br> untuk lanjut ke tahap Pembayaran</p>
        </fieldset>
    </form>
        </div>
</body>
</html>