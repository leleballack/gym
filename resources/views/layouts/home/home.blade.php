<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
        @include('layouts.home.home_head')
    @show

    @section('scripts')
        @include('layouts.home.home_scripts')
    @show
</head>

<body>

<main class="py-4">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
