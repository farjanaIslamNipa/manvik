<?php

namespace App\Http\Controllers;

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
}
