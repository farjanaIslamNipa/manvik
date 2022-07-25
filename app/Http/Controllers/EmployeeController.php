<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function allEmployee()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();;
        return view('employee.all-employee', compact('employees'));
    }

    public function addEmployee()
    {
        return view('employee.add-employee');
    }

    public function storeEmployee(Request $request)
    {

        $request->validate([
            'name'          => 'required',
            'fathers_name'  => 'required',
            'phone'         => 'required|numeric',
            'gender'        => 'required',
            'nid'           => 'nullable|numeric|unique:employees',
            'address'       => 'required',
            'joining_date'  => 'required',
            'position'      => 'required',
            'salary'        => 'required|numeric'
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $thumbNameTmp = md5_file($file->getRealPath());
            $extension = $file->getClientOriginalExtension();
            $filename = 'employees' . $thumbNameTmp . '_' . time() . '.' . $extension;
            $path = 'uploads/employees';
            $imgUrl = $file->move($path, $filename);
            $request['img'] = $imgUrl;
        }
    //    dd($file);
        $employee = new Employee();

        $employee->name             = $request->name;
        $employee->fathers_name     = $request->fathers_name;
        $employee->phone            = $request->phone;
        $employee->img              = isset($imgUrl) ? $imgUrl : '';
        $employee->nid              = $request->nid;
        $employee->gender           = $request->gender;
        $employee->address          = $request->address;
        $employee->joining_date     = date('Y-m-d H:i:s', strtotime($request->joining_date));
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
        return redirect()->route('admin.all.employee.show')->with('success', 'New employee added successfully');
        //  dd($employee);
    }


}
