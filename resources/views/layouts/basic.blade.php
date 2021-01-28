<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>{{ Config::get('const.software_name') }} - @yield('title')</title>
    @section('head')
        @include('layouts.head')
    @show
</head>

<body>

<div id="wrapper">
    <h1 class="page-title">@yield('title')</h1>

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>


@section('scripts')
    @include('layouts.scripts')
@show
</body>
</html>
