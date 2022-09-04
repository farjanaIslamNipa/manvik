<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function allEmployee()
    {
        $employees = Employee::orderBy('id', 'DESC')->paginate(8);
        return view('employee.all-employee', compact('employees'));
    }

    public function addEmployee()
    {
        $positions = Position::where('status', '1')->get();
        return view('employee.add-employee', compact('positions'));
    }
    public function updateEmployee()
    {
        $employees = Employee::orderBy('id', 'DESC')->paginate(10);
        return view('employee.update-employee-view', compact('employees'));
    }
    public function editEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $positions = Position::where('status', '1')->get();
        return view('employee.edit-employee', compact('employee', 'positions'));
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

        $employee->save();

        return redirect()->route('admin.all.employee.show')->with('success', 'New employee added successfully !');
    }
    public function updateEmployeeInfo(Request $request, $id){
        $employee = Employee::findOrFail($id);
        $request->validate([
            'name'          => 'required',
            'fathers_name'  => 'required',
            'phone'         => 'required|numeric',
            'gender'        => 'required',
            'nid'           => 'nullable|numeric',
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

        $employee->save();

        return redirect()->route('admin.all.employee.show')->with('success', 'Information updated successfully !');
    }

    public function deleteEmployee($id)
    {
        $Employee = Employee::findOrFail($id);

        $existingImageFilePath = $Employee->img;

        if (file_exists($existingImageFilePath))
        {
            unlink($existingImageFilePath);
        }

        $Employee->delete();
        return redirect()->route('admin.all.employee.show')->with('success', 'Employee deleted successfully !');
    }


}
