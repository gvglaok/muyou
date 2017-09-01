	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or "" }} {{ config('app.name', ' MuYou') }}</title>

	<link rel="stylesheet" href="/bcon/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/bcon/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/bcon/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/bcon/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/bcon/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/bcon/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/bcon/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/bcon/assets/css/custom.css">

	<script src="/bcon/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->