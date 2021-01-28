@extends('layouts.basic')

@section('title', 'Exercises List')

@section('head')
    @parent
@endsection

@section('content')

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                        {{ Config::get('const.software_name') }}
                    </a>
                </li>
                <li>
                    <a href="#">Exercises List</a>
                </li>
                <li>
                    <a href="#">Create Exercise</a>
                </li>
                <li>
                    <a href="#">Create Workout</a>
                </li>
                <li>
                    <a href="#">Assign Workout</a>
                </li>
            </ul>
        </div>
        <!-- /Sidebar -->

        <!-- List -->
        <!-- /List -->

    </div>

@endsection
