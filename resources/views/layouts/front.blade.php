<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Colégio Dom Bosco - Sorocaba</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="icon" type="image/png" href="/public/images/icon.png" />
		<link rel="stylesheet" href="/public/assets/css/main.css" />
		<link rel="stylesheet" href="/public/assets/css/bootstrap.min.css" />

        <script src="/public/assets/js/jquery.min.js"></script>
        <script src="/public/assets/js/jquery.dropotron.min.js"></script>
        <script src="/public/assets/js/jquery.scrolly.min.js"></script>
        <script src="/public/assets/js/browser.min.js"></script>
        <script src="/public/assets/js/breakpoints.min.js"></script>
        <script src="/public/assets/js/util.js"></script>
        <script src="/public/assets/js/bootstrap.min.js"></script>
        <script src="/public/assets/js/main.js"></script>

        <script src="{{ asset('/public/js/app.js') }}" defer></script>
	</head>
	<body class="homepage is-preload" id="app">
		<div id="page-wrapper" >

            <x-front.menu></x-front.menu>

            @yield('content')

            <x-front.footer></x-front.footer>

		</div>

	</body>
    <!-- Scripts -->
</html>
