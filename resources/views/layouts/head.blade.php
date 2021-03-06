<meta charset="utf-8">
<meta name="author" content="{{ config('const.software_company') }}">
<meta name="description" content="{{ config('const.software_name') }} - @yield('title')">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="robots" content="nofollow, noindex">
<meta name="theme-color" content="#0066CC">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('const.software_name') }} - @yield('title')</title>

@yield('meta')

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
<link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


@yield('style')

<!-- AdminTLE -->
<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
