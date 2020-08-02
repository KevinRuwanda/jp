<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<title>Monster-Wifi</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

</head>

<body>

	<div class="header-nav">
		<div class="header-nav-bottom">
			<div class="grup-all">
				<div class="nav-top">
					<!-- <div class="head-title">
					<p>Selamat Datang di</p>
				</div> -->
					<!-- <div class="right-contact">
					<!- <ul>
						<li><a href="#!">About</a></li>
						<li><a href="#!">Contact</a></li>
					</ul> -->
					<!-- </div> -->
				</div>
				<div class="head-search-nav">
					<div class="head-title-nav">
						<a href="/">
							<h1>Monster-Wifi</h1>
						</a>
						<span style="font-size:30px;cursor:pointer;position: absolute;right: 4px;top: 28%;" onclick="openNav()">&#9776;</span>
					</div>
					<div class="right-side-nav">
						@if (Auth::check())
						@if (Auth::user()->role == 3)
						<a href="/pesanan" style="font-size: 23px;">
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							({{count(App\order::where('pemilik_id',Auth::user()->id)->where('status','proses')->get())}})
						</a>
						@endif
						@endif
					</div>
					@if (Auth::check())
					<div class="image-profile">
						<div class="img-profile-content">
							<img src="@if (Auth::user()->image == null) {{ asset('image/111.png') }} @else {{ asset('image/projek/'.Auth::user()->image) }} @endif" alt="">
							<p>{{Auth::user()->name}}</p>
						</div>
						<ul>
							@if (Auth::user()->role == 3)
							<!-- <li><a href="/pesanan">Pesanan</a></li> -->
							<li><a href="/transaksi-pembayaran">Transaksi</a></li>
							<li><a href="/history">Riwayat Pembelian</a></li>
							<li><a href="/setting/{{Auth::user()->id}}">Pengaturan</a></li>
							@endif
							@if (Auth::user()->role == 2)
							<!-- <li><a href="/pesanan">Pesanan</a></li> -->
							<!-- <li><a href="/transaksi-pembayaran">Transaksi</a></li>
					<li><a href="/history">Riwayat Pembelian</a></li>
					<li><a href="/setting/{{Auth::user()->id}}">Pengaturan</a></li> -->
							<li><a href="/pengiriman-pesanan-pekerja">Pengiriman</a></li>
							@endif
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									Keluar</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
							</li>
						</ul>
					</div>
					@endif
					<div class="sign-login-side-right">
						<div class="icon-cart">
							@if (Auth::check())
							@if (Auth::user()->role == 3)
							<a href="/pesanan" style="font-size: 20px;">
								<i class="fa fa-cart-plus" aria-hidden="true"></i> ({{count(App\order::where('pemilik_id',Auth::user()->id)->where('status','proses')->get())}})
							</a>
							@endif
							@endif
						</div>
						@if (Auth::check())
						<div class="image-profile-mobile">
							<div class="img-profile-content-mobile">
								<img src="@if (Auth::user()->image == null) https://www.gravatar.com/avatar/ @else {{ asset('image/projek/'.Auth::user()->image) }} @endif" alt="">
							</div>
							<div class="name-profile">
								<p>{{Auth::user()->name}}</p>
							</div>
							<ul>
								<li><a href="#!">Pengaturan</a></li>
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										Keluar</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
								</li>
							</ul>
						</div>
						@endif
						{{-- @if (!Auth::check())
						<a href="{{ route('login') }}">
							<h3>Login</h3>
						</a>
						&nbsp; &nbsp; <a href="{{ route('register') }}">
							<h3>Register</h3>
						</a>
						@endif --}}
					</div>
				</div>
			</div>
		</div>
		<div class="menu-store">
			@if (Auth::check())
			<nav>
				<ul>
					<!-- <li><a href="/">Home</a></li>
				@if (Auth::check()) -->
					@if (Auth::user()->role == 1)
					<li>
						<a href="/produk">Produk</a>
					</li>
					@endif
					<!-- @endif -->
					@if (Auth::check())
					@if (Auth::user()->role == 1)
					<li><a href="#!">Pengguna</a>
						<ul>
							<li><a href="/pekerja">Pekerja</a></li>
							@if (Auth::user()->role == 1)
							<li><a href="/pembeli">Pembeli</a></li>
							@endif
						</ul>
					</li>
					@endif
					@if (Auth::user()->role != 1)
					<!-- <li><a href="#!">Pesanan</a>
					<ul>
						@if (Auth::user()->role != 2)
						<li><a href="/pesanan">Pesanan</a></li>
						<li><a href="/transaksi-pembayaran">Transaksi</a></li>
						<li><a href="/history">History</a></li>
						@else
						<li><a href="/pengiriman-pesanan-pekerja">Pengiriman</a></li>
						@endif
					</ul>
				</li> -->
					@else
					<li><a href="#!">Pesanan</a>
						<ul>
							<li><a href="/pembayaran-verifikasi">Transaksi</a></li>
							<li><a href="/pengiriman/pesanan">Pengiriman</a></li>
						</ul>
						@endif
						@endif
				</ul>
			</nav>
			@endif
		</div>
	</div>

		<!-- <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">Home</a>
			<a href="#">Tambah Produk</a>
			<a href="#">Ikan Hias</a>
			<a href="#">Ikan Cupang</a>
			<a href="#">Pekerja</a>
			<a href="#">Pembeli</a>
			<a href="#">Pesanan</a>
			<a href="#">Transaksi</a>
			<a href="#">History</a>
		</div> -->

	<div class="content-jualan">
		<div class="head-title-transaksi">
			<h3>Application Form</h3>
		</div>
	</div>

	<div class="content-info">
		<div class="info-title">
			<h1>• Early Bird Special +1GB •</h1>
			<br>
			<h2>(JP SMART CALL/JP SMART DATA)</h2>
			<h3>1 GB will be rewarded for those customers who
				complete the monthly bill before 23:59 at the
				<br>end of the month. The rewarded 1GB will be valid till the end of that month only. (Not applicable for free period of first month)</h3>
		</div>
	</div>

	<div class="content-produk">
		<div class="head-produk">
			<h3>Select Product</h3><span class="a">Required </span>
		</div>
	</div>

	<div class="content-barang">
		{{-- <div class="head-title-transaksi">
			<h3>Segalanya Ada Disini</h3>
		</div> --}}
		@foreach ($produks as $produk)
		<div class="col-xs-12 col-sm-6 col-md-4" id="solver-card">

			<div id="make-3D-space">
				@if ($produk->stok == "Out of Stock")
				<div class="kosong-data-stok"></div>
				<h1 id="sold-out-stok">Out of Stock</h1>
				@endif
				<div id="product-card">
					<div id="product-front">
						<div class="shadow"></div>
						<img src="{{ asset('image/projek/'.$produk->image) }}" alt="" />
						<div class="image_overlay"></div>
						<a href="/produk/{{$produk->slug}}">
							<div id="view_details">Order Now</div>
						</a>
						<div class="stats">
							<div class="stats-container">

								<a href="/produk/{{$produk->slug}}">
									<span class="product_name"><b>{{$produk->name}}</b></span>
								</a>
								<p style="margin-top: 10px;padding-bottom:0;"><span class="product_price">¥ {{$produk->harga}}</span>

								&nbsp;&nbsp;&nbsp; Stock : <span style="color: black; font-weight: 900;">{{ $produk->stok }}</span></p>
								{{-- <p style="margin: 0;padding-bottom:0 ;color: black;">{{ str_limit(trim(strip_tags($produk->deskripsi)), 35, '...') }}</p> --}}

								{{-- <div class="product-options">
									<p style="margin: 0;padding-bottom:0 ;">Dijual</p>
									<span style="color: black">{{$produk->satuan}}</span>
								</div> --}}
							</div>
						</div>
					</div>
					<div id="product-back">
						<div class="shadow"></div>
						<div id="carousel">
							<ul>
								<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
								<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
								<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
							</ul>
							<div class="arrows-perspective">
								<div class="carouselPrev">
									<div class="y"></div>
									<div class="x"></div>
								</div>
								<div class="carouselNext">
									<div class="y"></div>
									<div class="x"></div>
								</div>
							</div>
						</div>
						<div id="flip-back">
							<div id="cy"></div>
							<div id="cx"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		@endforeach
	</div>

	{{-- <div class="content-produk">
		<div class="head-produk">
			<h3>Select Plan</h3><span class="a">Required </span>
		</div>
	</div> --}}

	{{-- <div class="content-regist">
		<div class="head-regist">
			<h3>Register a new account</h3>
			<br>
			<h4>Your account for My Page is the email address you registered for the application.</h4>

			<br>
			<h4>We will be sending important notices so please make sure that your email address is correct.</h4>

			<br>
			<h4>Please register for an email address if you don't have one.</h4>
		</div>
	</div> --}}

	<div class="konten-regist">
		<div class="head-regist">
			{{-- <ul>
				<li>
			<h2>E-mail</h2><span class="a">Required </span>
				</li>
				<li>
			<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Password</h2><span class="a">Required
				</li>
			</ul>
			<ul>
				<li>
			<input type="email" class="email" id="email" name="email" placeholder="xxxx@xxxx.com" size="30" required>
				</li>
				<li>
			<input type="password" class="email" id="pass" name="pass" size="30" required>
				</li>
			</ul>
			<ul>
				<li>
			<h2>
				Username</h2><span class="a">Required
				</li>
				<li>
			<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Password (re-enter)</h2><span class="a">Required
				</li>
			</ul>
			<ul>
				<li>
			<input type="email" class="email" id="email" name="email" size="30" required>
				</li>
				<li>
			<input type="password" class="email" id="pass" name="pass" size="30" required>
				</li>
			</ul> --}}
			<h4>•</h4><h5><a href="#">Privacy Policy</a></h5>
			<br><h4>•</h4><h5><a href="#">JP-Sim membership agreement</a></h5>
		</div>
		<br>
		<div class="don-regist">
			<h4>※In order to use our services at DX HUB, you are required to apply for our JP-Sim Membership
<br>By clicking [Register], it means that you agree to our privacy policy.</h4>
		</div>
	</div>

	<footer>
        {{-- <div>Copyright © Outshop. Dibuat dengan cinta oleh kelompok ... ntah kelompok berapa ini.</div> --}}
    </footer>

					<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
					<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
					<script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
					<script>
						function navbarFixed(){
        if ( $('.header_area').length ){
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
					</script>
				</body>
				</html>
