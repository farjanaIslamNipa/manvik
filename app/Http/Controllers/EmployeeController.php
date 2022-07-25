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
            'fathers_name'  => 'required',
            'phone'         => 'required',
            'gender'        => 'required',
            'address'       => 'required',
            'joining_date'  => 'required',
            'position'      => 'required',
            'salary'        => 'required'
        ]);

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $thumbNameTmp = md5_file($file->getRealPath());
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = 'tags' . $thumbNameTmp . '_' . time() . '.' . $extension;
        //     $path = 'uploads/tags/images';
        //     $imgUrl = $file->move($path, $filename);
        //     $request['image'] = $imgUrl;
        // }
    //    dd($file);
        $employee = new Employee();

        $employee->name             = $request->name;
        $employee->fathers_name     = $request->fathers_name;
        $employee->phone            = $request->phone;
        $employee->img              = $request->img;
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
       
        //  dd($employee);
    }

    
}
