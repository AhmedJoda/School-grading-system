@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to {{ config('app.name') }}
    </div>

    <a href="{{route('students.index')}}">Students</a>
    <a href="{{route('employees.index')}}">employees</a>

</div>
@endsection