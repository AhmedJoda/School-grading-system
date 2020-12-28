@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">job</th>
                <th scope="col">salary</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($employees as $employee)
                <th scope="row">1</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->job}}</td>
                <td>{{$employee->salary}}</td>
                <td><a href="{{url('employees/'.$employee->id.'/edit')}}">
                            <button class='btn btn-primary'>    
edit                        </button>
                        </a> </td>
                        <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" style="display: inline-block;">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="_method" value="DELETE">
                     <input type="submit" class="btn btn-danger" value="delete">
</form>   
                        </td>
            </tr>
            @endforeach
            <tr>
                <th scope="row">
                    <a href="{{route('employees.create')}}">
                            <button class='btn btn-primary'>    
                            add a new employee
                        </button>
                        </a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection