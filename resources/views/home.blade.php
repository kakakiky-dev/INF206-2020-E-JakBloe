@extends('master')

@section('deskripsi')

<section class="new_startup_banner_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="new_startup_img">
					<div class="line line_one">
						<img src="img/new/line_01.png" alt="">
					</div>
					<div class="line line_two">
						<img src="img/new/line_02.png" alt="">
					</div>
					<div class="line line_three">
						<img src="img/new/line_03.png" alt="">
					</div>
					<img src="img/new/welcomejb2.png" alt="">
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-center">
				<div class="new_startup_content">
					<h2 class="f_700 f_size_40 l_height50 w_color mb_20 wow fadeInRight" data-wow-delay="0.3s">Gabung Bersama<br><span>JakBloe</span></h2>
					<p class="f_400 w_color l_height28 wow fadeInRight" data-wow-delay="0.4s">JakBloe adalah sebuah website yang memungkinkan kamu untuk membeli barang secara massal bersama dengan pedagang lainnya, sehingga barang yang kamu beli menjadi lebih murah.</p>
					<div class="action_btn d-flex align-items-center mt_40 wow fadeInRight" data-wow-delay="0.6s">
						@if(Auth::user())
						@else
						<a href="/register" class="btn_hover app_btn">Daftar <i class="ti-arrow-right"></i></a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

        <section class="shop_list_area sec_pad">
            <div class="container">
			<div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
			<h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Selamat Datang di Website<br> JakBloe</h2>
			<p class="f_400 t_color l_height28 wow fadeInRight text-center" data-wow-delay="0.4s">Mau Beli Apa Hari Ini?</p>
			</div>
			@foreach($isi as $i)
                <div class="row shop_list_item">
                    <div class="col-md-5">
                        <div class="shop_list_img">
                            <img class="img-fluid" src="img/gambar/{{$i->file}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 single_product_item mt-0">
					<div class="single_pr_details text-left">
						<a href="#" class="s_list_title">
							<h3 class="f_p f_500 f_size_22">{{$i->Judul}}</h3>
							<p class="f_p f_150 f_size_12">Dibuat oleh: {{$i->Nama}} - {{$i->created_at}}</p>
						</a>
						<!-- <div class="ratting">
							<a href="#"></a>
						</div> -->
						<div class="price"><span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">Target {{$i->Target}} </span>KG</span>	<ins><span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"></span>Harga Rp {{$i->Harga}}/kg |</span></ins>
						</div>
						<br>
						<div class="pr_button">
							<form action="/barang" method="get">
								<button type="submit" name="add-to-cart" value="{{$i->id}}" class="cart_btn">Beli sekarang</button>&nbsp;&nbsp;<button type="submit" name="add-to-cart" value="{{$i->id}}" class="cart_btn">Daftar Pembeli</button>
							</form>
						</div>
					</div>
                    </div>
                </div>
				@endforeach
            </div>
        </section>
@endsection