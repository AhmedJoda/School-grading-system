@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to {{ config('app.name') }}
    </div>

    <a class="btn btn-primary" href="{{route('students.index')}}">Students</a>
   @if(auth()->user() && auth()->user()->admin)
    <a class="btn btn-primary" href="{{route('employees.index')}}">employees</a>
    @endif

</div>
@endsection