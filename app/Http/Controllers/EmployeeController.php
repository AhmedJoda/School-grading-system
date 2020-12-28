<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',['employees' => $employees]);
    }
    public function create()
    {
        return view('employees.create');
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit',['employee'=>$employee]);
    }
   
    public function store(Request $r)
    {
        $rules = [
            'name' => 'required',
            'job' => 'required',
            'salary'=> 'required',
          ];
          $Validator = Validator::make($r->all(), $rules);
          
          if ($Validator->fails()) {
            return response()->json(['status' => false, 'messages' => $Validator->messages()->all()]);
          } else {
            
              $employee = new Employee;
              $employee->name = request('name');
              $employee->job = request('job');
              $employee->salary = request('salary');
              $employee->save();
              session()->flash('success','added successfully');
              return redirect('/employees');
          }

    }

    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'job' => 'required',
            'salary'=> 'required',
          ];
          $Validator = Validator::make(request()->all(), $rules);
          
          if ($Validator->fails()) {
            return response()->json(['status' => false, 'messages' => $Validator->messages()->all()]);
          } else {
              $employee = Employee::find($id);
              $employee->name = request('name');
              $employee->job = request('job');
              $employee->salary = request('salary');
              $employee->save();
              session()->flash('success','updated successfully');
              return redirect('/employees');
          }

    }
    public function destroy($id)
    {
        Employee::find($id)->delete();
         session()->flash('success','deleted successfully');
         return redirect('/employees');
    }
}
