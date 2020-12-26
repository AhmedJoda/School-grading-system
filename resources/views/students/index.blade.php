@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">degree</th>
                <th scope="col">grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>

            <tr>
                <th scope="row">
                    <button class='btn btn-primary'>add a new student</button>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection