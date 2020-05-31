@extends('master')

@section('deskripsi')
<section class="startup_fuatures_area sec_pad">
    <div class="container">
        <div class="row">
            @foreach($isi as $i)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/konfirmasi/{{$i->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$i->pembeli}}</h5>
                        <p class="card-text">Target {{$i->dibeli}} KG</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
