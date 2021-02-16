@extends('layouts.home.home')

@section('title', 'Home')

@section('head')
    @parent
@endsection

@section('content')
    <div class="row home">
        <div class="col-md-12">
            <div class="card-box">
                <div id="wrapper">
                    <div id="bg"></div>
                    <div id="overlay"></div>
                    <div id="main">
                        <div id="header">
                            <h1>John Doe</h1>
                            <p><em>"Motivation is what gets you started. Habit is what keeps you going."</em></p>
                            <nav>
                                <ul>
                                    <li><a href="#" class="fas fa-address-card"><span class="label">Profile</span></a></li>
                                    <li><a href="{{ route('exercises.index') }}" class="fas fa-dumbbell"><span class="label">Exercises</span></a></li>
                                    <li><a href="#" class="fas fa-chart-bar"><span class="label">Stats</span></a></li>
                                    <li><a href="#" class="fas fa-calculator"><span class="label">Calculator</span></a></li>
                                    <li><a href="#" class="fas fa-file-pdf"><span class="label">Docs</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div id="footer">
                            <span class="copyright">2021 © {{ Config::get('const.software_company') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
