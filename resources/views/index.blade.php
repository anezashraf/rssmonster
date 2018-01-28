<!-- /resources/views/index.blade.php -->

<head>
	<meta charset="UTF-8">
	<title>RSSMonster</title>
	<style>
		body {
			margin: 0;
		}
	</style>

	<!-- Meta base url, needed for javascript location -->
	<meta name="base_url" content="{{ URL::to('/') }}" v-model="baseUrl">

	<!-- CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<script defer src="{{ URL::asset('js/fontawesome-5.0.4.js') }}"></script>

	<!-- Configuring Web Applications -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('images/favicon/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/favicon/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/favicon/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/favicon/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/favicon/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicon/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/favicon/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicon/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/favicon/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"	href="{{ URL::asset('images/favicon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('images/favicon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon/favicon-16x16.png') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ URL::asset('images/favicon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
	<meta name="apple-mobile-web-app-capable" content="yes" />
</head>

<div id="app">

</div>

<!-- JavaScripts -->
<script src="{{ URL::asset('js/main.js') }}"></script>
