<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
        @include('layouts.head')
    @show

    @section('scripts')
        @include('layouts.scripts')
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
