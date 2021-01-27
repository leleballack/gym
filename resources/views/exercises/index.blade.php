@extends('layouts.basic')

@section('title', 'Exercises')

@section('head')
    @parent
@endsection

@section('content')

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card-box">--}}
{{--                <div id="wrapper">--}}
{{--                    <div id="bg"></div>--}}
{{--                    <div id="overlay"></div>--}}
{{--                    <div id="main">--}}

{{--                        <div id="header">--}}
{{--                            <h1>John Doe</h1>--}}
{{--                            <p><em>"Motivation is what gets you started. Habit is what keeps you going."</em></p>--}}
{{--                            <nav>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#" class="fas fa-address-card"><span class="label">Profile</span></a></li>--}}
{{--                                    <li><a href="{{ route('exercises.index') }}" class="fas fa-dumbbell"><span class="label">Exercises</span></a></li>--}}
{{--                                    <li><a href="#" class="fas fa-chart-bar"><span class="label">Stats</span></a></li>--}}
{{--                                    <li><a href="#" class="fas fa-calculator"><span class="label">Calculator</span></a></li>--}}
{{--                                    <li><a href="#" class="fas fa-file-pdf"><span class="label">Docs</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}

{{--                        <div id="footer">--}}
{{--                            <span class="copyright">2021 © {{ Config::get('const.software_company') }}</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
