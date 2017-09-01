<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	
@include('layouts.bcHead')
</head>

<body class="page-body">

	@include('layouts.bcSettingPanel')
	<div class="page-container ">
		
		@include('layouts.bcSidebarMenu')
		<div class="main-content">

			@include('layouts.bcContentMenu')

			@yield('content')
			
			@include('layouts.bcFoot')
		</div>
		
		@include('layouts.bcChat')
	</div>
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	
	@yield('importCSS')
	@include('layouts.bcJS')
	@yield('importJS')
	<!-- JavaScripts initializations and stuff -->
	<script src="/bcon/assets/js/xenon-custom.js"></script>

</body>
</html>