@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">marks</th>
                <th scope="col">grade</th>
                <th scope="col">gpa</th>
                <th scope="col">show</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($students as $student)
                <th scope="row">1</th>
                <td>{{$student->name}}</td>
                <td>{{$student->marks}}</td>
                <td>{{$student->grade}}</td>
                <td>{{$student->gpa}}</td>
                <td><a href="{{url('students/'.$student->id)}}">
                    <button class='btn btn-primary'>    
show                        </button>
                </a> </td>
                <td><a href="{{url('students/'.$student->id.'/edit')}}">
                            <button class='btn btn-warning'>    
edit                        </button>
                        </a> </td>
                        <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" style="display: inline-block;">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="_method" value="DELETE">
                     <input type="submit" class="btn btn-danger" value="delete">
</form>   
                        </td>
            </tr>
            @endforeach
            <tr>
                <th scope="row">
                    <a href="{{route('students.create')}}">
                            <button class='btn btn-primary'>    
                            add a new student
                        </button>
                        </a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection