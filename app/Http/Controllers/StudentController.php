<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Student::all();
        return view('students.index',['students' => $students]);
    }
    public function create()
    {
        return view('students.create');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit',['student'=>$student]);
    }
   
    public function store(Request $r)
    {
        $rules = [
            'name' => 'required',
            'marks' => 'required'
          ];
          $Validator = Validator::make($r->all(), $rules);
          
          if ($Validator->fails()) {
            return response()->json(['status' => false, 'messages' => $Validator->messages()->all()]);
          } else {
            $marks = request('marks');
              $grade = 'F' ;
              $gpa = '1';
              

              if ($marks > 90) {
                $grade = 'A' ;
                $gpa = '1';

            }
            elseif($marks > 80){
                $grade = 'B' ;
                $gpa = '1';


            }elseif($marks > 70){
                $grade = 'C' ;
                $gpa = '1';


            }elseif($marks > 60){
                $grade = 'D' ;
                $gpa = '1';


            }else{
                $grade = 'F' ;
                $gpa = '1';


            }
              $student = new Student;
              $student->name = request('name');
              $student->marks = $marks;
              $student->grade = $grade;
              $student->gpa = $gpa;

              $student->save();
              session()->flash('success','added successfully');
              return redirect('/students');
          }

    }

    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'marks' => 'required'
          ];
          $Validator = Validator::make(request()->all(), $rules);
          
          if ($Validator->fails()) {
            return response()->json(['status' => false, 'messages' => $Validator->messages()->all()]);
          } else {
            $marks = request('marks');
            $gpa = '1';
              $grade = 'F' ;
              $gpa = '1';

              if ($marks > 90) {
                $grade = 'A' ;
                $gpa = '1';

            }
            elseif($marks > 80){
                $grade = 'B' ;
                $gpa = '1';


            }elseif($marks > 70){
                $grade = 'C' ;
                $gpa = '1';


            }elseif($marks > 60){
                $grade = 'D' ;
                $gpa = '1';


            }else{
                $grade = 'F' ;
                $gpa = '1';


            }
              $student = Student::find($id);
              $student->name = request('name');
              $student->marks = $marks;
              $student->grade = $grade;
              $student->gpa = $gpa;
              $student->save();
              session()->flash('success','updated successfully');
              return redirect('/students');
          }

    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show',['student'=>$student]);
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
         session()->flash('success','deleted successfully');
         return redirect('/students');
    }
}
