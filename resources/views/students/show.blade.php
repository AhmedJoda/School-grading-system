@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">show student</div>

                <div class="card-body">

                       
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>

                        <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{$student->name }}</label>
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Marks:</label>

                            <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{$student->marks }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">grade:</label>

                            <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{$student->grade }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">gpa:</label>

                            <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{$student->gpa }}</label>
                            </div>
                        </div>
                       

                               <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{url('students/')}}">
                                    <button class='btn btn-primary'>    
        go back                        </button>
                                </a>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection