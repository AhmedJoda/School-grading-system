@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to {{ config('app.name') }}
    </div>

    <a href="/students">Students</a>
    <a href="/students">employees</a>

</div>
@endsection