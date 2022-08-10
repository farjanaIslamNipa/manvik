<?php

namespace App\Http\Controllers;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function allAdvanceSalary()
    {
        $advanceSalaries = AdvanceSalary::orderBy('id', 'DESC')->paginate(8);
        return view('pages.salary.advance-salary-list', compact('advanceSalaries'));
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
            'position'      => 'nullable',
            'month'         => 'required',
            'year'          => 'required',
            'advance'       => 'required',
        ]);

        $month = $request->month;
        $employee_id = $request->employee_id;

        $advance = DB::table('advance_salaries')
                   ->where('month', $month)
                   ->where('employee_id', $employee_id)
                   ->first();

        if($advance === null){
            $advance_salary = new AdvanceSalary();

            $advance_salary->employee_id = $request->employee_id;
            $advance_salary->position = $request->position;
            $advance_salary->month = $request->month;
            $advance_salary->year = $request->year;
            $advance_salary->advance = $request->advance;

            $advance_salary->save();

            return redirect()->route('admin.advance.salary.all')->with('success', 'Advance salary paid successfully !');
        }else{
            return redirect()->route('admin.advance.salary.add')->with('error', 'Advance salary is already taken for this month !');
        }


    }
    public function editAdvanceSalary()
    {
        $employees = Employee::all();
        $positions  = Position::all();
        return view('pages.salary.advance-salary', compact('employees', 'positions'));
    }
    public function storeSalary(Request $request)
    {
        $request->validate([

        ]);
    }
}
