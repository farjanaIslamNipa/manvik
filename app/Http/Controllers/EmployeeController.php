<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function allEmployee()
    {
        return view('employee.all-employee');
    }

    public function addEmployee()
    {
        return view('employee.add-employee');
    }

    public function storeEmployee(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'img'           => 'nullable',
            'fathers_name'  => 'required',
            'nid'           => 'nullable',
            'gender'        => 'nullable',
            'address'       => 'required',
            'joining_date'  => 'required',
            'position'      => 'required',
            'salary'        => 'required'
        ]);



        $employee = new Employee();

        $employee->name             = $request->name;
        $employee->fathers_name     = $request->fathers_name;
        $employee->nid              = $request->nid;
        $employee->gender           = $request->gender;
        $employee->address          = $request->address;
        $employee->joining_date     = $request->joining_date;
        $employee->position         = $request->position;
        $employee->salary           = $request->salary;
        // if($request->hasFile('img')){
        //     $request->validate([
        //         'image' => 'mimes:jpeg,bmp,png'
        //     ]);
        //     $request->img->store('employee', 'public');
        //     $employee->img = $request->img->hashName();
        // }

         $employee->save();

         dd($employee);
    }

    
}
