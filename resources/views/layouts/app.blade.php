<?php
if (!isset($seo)) {
    $seo = (object) array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="par-time">
    <meta name="author" content="par-time">
    <meta name="keyword" content="par-time">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>{{ config('app.name', 'Laravel') }} | {{ $seo->seo_title }}</title>
    <!-- Icons -->
    <link href="{{asset('tamplate/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('tamplate/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{asset('tamplate/dest/style.css')}}" rel="stylesheet">
            <style>
     @import url({{ asset('fonts/droidarabickufi.css') }});
*,html,body , h1 , h2 , h3, h4, h5 {
  font-family: 'Droid Arabic Kufi', serif;
  word-spacing: 1px;
}
    </style>
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">



  @yield('content')


    <!-- Bootstrap and necessary plugins -->
    <script src="{{asset('tamplate/js/libs/jquery.min.js') }}"></script>
    <script src="{{asset('tamplate/js/libs/tether.min.js') }}"></script>
    <script src="{{asset('tamplate/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{asset('tamplate/js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{asset('tamplate/js/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{asset('tamplate/js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{asset('tamplate/js/views/main.js') }}"></script>

    <!-- Grunt watch plugin -->
    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>
