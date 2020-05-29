@extends('master') @section('deskripsi')
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
					<div class="action_btn d-flex align-items-center mt_40 wow fadeInRight" data-wow-delay="0.6s">@if(Auth::user()) @else <a href="/register" class="btn_hover app_btn">Daftar <i class="ti-arrow-right"></i></a>
						@endif</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="startup_fuatures_area sec_pad">
	<div class="container">
		<div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
			<h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Selamat Datang di Website<br> JakBloe</h2>
		</div>
		<ul class="nav nav-tabs startup_tab" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="true"> <span class="icon"><i class="icon-cloud-upload"></i></span>
					<h3>Marketing<br> Cloud</h3>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="app-tab" data-toggle="tab" href="#app" role="tab" aria-controls="app" aria-selected="false"> <span class="icon"><i class="icon-screen-tablet"></i></span>
					<h3>Commerce<br> Apps</h3>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="hubstaff-tab" data-toggle="tab" href="#hubstaff" role="tab" aria-controls="hubstaff" aria-selected="false"> <span class="icon"><i class="icon-graduation"></i></span>
					<h3>Hubstaff<br> App</h3>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="engine-tab" data-toggle="tab" href="#engine" role="tab" aria-controls="engine" aria-selected="false"> <span class="icon"><i class="icon-refresh"></i></span>
					<h3>Automation<br> Engine</h3>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false"> <span class="icon"><i class="icon-bulb"></i></span>
					<h3>Business<br> Intellegence</h3>
				</a>
			</li>
		</ul>
	</div>
</section>

<section class="shop_list_area sec_pad">
	<div class="container">
    @foreach($isi as $i)
		<div class="row align-items-center">
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
						</a>
						<div class="ratting">
							<a href="#"></a>
						</div>
						<div class="price"><span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">Target {{$i->Target}} </span>KG</span>
							<ins><span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"></span>Harga Rp {{$i->Harga}}</span></ins>
						</div>
						<p class="f_p f_400 f_size_15 mt_30 mb_50">The full monty brilliant young delinquent burke naff baking cakes the wireless argy-bargy smashing, squiffy chimney pot I he nicked it twit brolly spend a penny he legged it, cup of tea is ruddy grub bugger the bee's knees.!</p>
						<div class="pr_button">
                        <form action="/barang" method="get">
							<button type="submit" name="add-to-cart" value="{{$i->id}}" class="cart_btn">Lihat</button> <a href="#"><i class="ti-heart"></i></a>
                            <a href="#"><i class="ti-eye"></i></a>
                            </form>
						</div>
					</div>
				</div>
			</div>
        </div>
        @endforeach
	</div>
</section>

<section class="startup_fuatures_area sec_pad">
	<div class="container">
		<div class="row">
            @foreach($isi as $i)
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/gambar/{{$i->file}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{$i->Judul}}</h5>
						<p class="card-text">Target {{$i->Target}} KG</p>
						<p class="card-text">Harga Rp.{{$i->Harga}}</p>
						<form action="/barang" method="get">
							<button class="btn btn-info" type="submit" name="search" value="{{$i->id}}">lihat</button>
						</form>
					</div>
				</div>
            </div>
            @endforeach
        </div>
	</div>
</section>
@endsection