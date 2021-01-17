<title>{{ Config::get('const.software_name') }} - @yield('title')</title>
<meta charset="utf-8">
<meta name="author" content="{{ Config::get('const.software_company') }}">
<meta name="description" content="{{ Config::get('const.software_name') }} - @yield('title')">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="robots" content="nofollow, noindex">
<meta name="theme-color" content="#0066CC">

@yield('meta')

@yield('style')

<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>