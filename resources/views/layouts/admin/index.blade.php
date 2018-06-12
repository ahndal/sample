<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.admin.includes.head')
</head>
<body>
	<!-- begin #page-loader -->
	@include('layouts.admin.includes.page-loader')
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		@include('layouts.admin.includes.header')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('layouts.admin.includes.sidebar')
		<!-- end #sidebar -->
		
        <!-- begin #content -->
        @yield('content')
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		@include('layouts.admin.includes.scroll-top-btn')
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	@include('layouts.admin.includes.page-js')
</body>
</html>