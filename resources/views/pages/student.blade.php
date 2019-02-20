<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>

@extends('layout.layout')
@yield('content')
@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </table>
    </div>
@endsection