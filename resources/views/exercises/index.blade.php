@extends('layouts.basic')

@section('title', 'Exercise List')

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
                    <a href="{{ route('exercises.index') }}">Exercises List</a>
                </li>
                <li>
                    <a href="{{ route('exercises.create') }}">Create Exercise</a>
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
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First</th>
                <th>Last</th>
                <th>Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th>3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <!-- /List -->

    </div>

@endsection
