<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @section('head')
        @include('layouts.head')
    @show
</head>

<body>

<div id="wrapper">
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
