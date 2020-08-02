<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<title>Terima Kasih</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

	@yield('style')
</head>
<body>
	<div class="grup-center-in-ucapan">
		<div class="grup-ucapan">
			<h1>Terima Kasih sudah</h1>
			<h4>Mengunjungi</h4>
			<h2>Toko kami yang sepi ini...</h2>
			<p><a href="/">Belanja lagi dong...</a></p>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/tinymcescript.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/lightbox.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
</body>
</html>
