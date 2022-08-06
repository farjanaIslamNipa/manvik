<?php

namespace App\Http\Controllers;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function allSalary()
    {
        return view('pages.salary.all-salary');
    }
    public function addSalary()
    {
        $employees = Employee::all();
        return view('pages.salary.add-salary', compact('employees'));
    }
    public function advanceSalary()
    {
        $employees = Employee::all();
        $positions  = Position::all();
        return view('pages.salary.advance-salary', compact('employees', 'positions'));
    }
    public function StoreAdvanceSalary(Request $request)
    {
        $request->validate([
            'employee_id'   => 'required',
            'position_id'   => 'required',
            'month'         => 'required',
            'year'          => 'required',
            'advance'       => 'required',
        ]);

        $advance_salary = new AdvanceSalary();

        $advance_salary->employee_id = $request->employee_id;
        $advance_salary->position_id = $request->position_id;
        $advance_salary->month = $request->month;
        $advance_salary->year = $request->year;
        $advance_salary->advance = $request->advance;
    }
    public function storeSalary(Request $request)
    {
        $request->validate([

        ]);
    }
}
