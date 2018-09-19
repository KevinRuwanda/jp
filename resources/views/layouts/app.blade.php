<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <title>FishShop - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">


</head>
<body>

    <div class="header-nav">
        <div class="grup-all">
            <div class="nav-top">
                <div class="head-title">
                    <p>We are fish lover</p>
                </div>
                <div class="right-contact">
                    <ul>
                        <li><a href="£!">About</a></li>
                        <li><a href="£!">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="head-search-nav">
                <div class="head-title-nav">
                    <h1>FishShop</h1>
                    <span style="font-size:30px;cursor:pointer;position: absolute;right: 4px;top: 28%;" onclick="openNav()">&#9776;</span>
                </div>
                <div class="search-box">
                    <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                    <form action="" class="search-form">
                        <input type="text" placeholder="Search" id="search" autocomplete="off">
                    </form>
                    <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
                    xml:space="preserve">
                    <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                    <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
                </svg>
                <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
            </div>
            <div class="right-side-nav">
                <a href="#!">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
            </div>
            <div class="sign-login-side-right">
                <div class="icon-cart">
                    <a href="#!">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a>
                </div>
                <a href="#!"><h3>Login</h3></a> Or <a href="#!"><h3>Registerasi</h3></a>
            </div>
        </div>
    </div>
    <div class="menu-store">
        <nav>
            <ul>
                <li><a href="#!">Home</a></li>
                <li><a href="#!">Produk</a>
                    <ul>
                        <li><a href="/tabahproduk">Tambah Produk</a></li>
                        <li><a href="#!">Ikan Hias</a></li>
                        <li><a href="#!">Ikan Cupang</a></li>
                    </ul>
                </li>
                <li><a href="#!">User</a>
                    <ul>
                        <li><a href="#!">Pekerja</a></li>
                        <li><a href="#!">Pembeli</a></li>
                    </ul>
                </li>
                <li><a href="#!">Order</a>
                    <ul>
                        <li><a href="#!">Pesanan</a></li>
                        <li><a href="#!">Transaksi</a></li>
                        <li><a href="#!">History</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="mySidenav" class="sidenav">
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
</div>

@yield('content')

<footer>
    <div class="col-xs-6">Copyright © Sekarang(2018)</div>
    <div class="col-xs-6">Salam Damai To PPL-Agro</div>
</footer>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/tinymcescript.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/lightbox.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
</body>
</html>
