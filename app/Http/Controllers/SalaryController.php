<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function addSalary()
    {
        $employees = Employee::all();
        return view('pages.salary.add-salary', compact('employees'));
    }
    public function allSalary()
    {
        return view('pages.salary.all-salary');
    }
    public function storeSalary(Request $request)
    {
        $request->validate([
            
        ]);
    }
}
