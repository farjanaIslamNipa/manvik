<?php

namespace App\Http\Controllers;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function allSalary()
    {
        $employees = Employee::orderBy('id', 'ASC')->paginate(8);
        $salaries = Salary::orderBy('id', 'DESC')->paginate(8);
        return view('pages.salary.all-salary', compact('employees','salaries' ));
    }
    public function paySalary()
    {
        $employees = Employee::orderBy('id', 'ASC')->paginate(8);
        $lastMonth = strtolower(date('F', strtotime('-1 months')));
        $currentYear = date('Y');
        // dd($lastMonth);
        return view('pages.salary.pay-salary', compact('employees', 'lastMonth', 'currentYear'));
    }
    public function editSalary($id)
    {
        $salary = Salary::findOrFail($id);
        $lastMonth = strtolower(date('F', strtotime('-1 months')));
        $currentYear = date('Y');
        // dd($lastMonth);
        return view('pages.salary.edit-salary', compact('salary', 'lastMonth', 'currentYear'));
    }
    public function storeSalary(Request $request)
    {
        // dd($request);
        $request->validate([
            'employee_id'   => 'required',
            'position'      => 'required',
            'month'         => 'required',
            'year'          => 'required',
            'advance'       => 'nullable',
            'paid'          => 'required',
            'paid_total'    => 'required'
        ]);

        $month = $request->month;
        $year  = $request->year;
        $employee_id = $request->employee_id;

        $paidSalary    = DB::table('salaries')
                   ->where('month', $month)
                   ->where('year', $year)
                   ->where('employee_id', $employee_id)
                   ->first();

        if($paidSalary === null){
            $salary = new Salary();

            $salary->employee_id = $request->employee_id;
            $salary->position = $request->position;
            $salary->month = $request->month;
            $salary->year = $request->year;
            $salary->advance = $request->advance;
            $salary->paid = $request->paid;
            $salary->paid_total = $request->paid_total;

            $salary->save();

            return redirect()->route('admin.add.salary')->with('success', 'Paid Successfully!');
        }else{
            return redirect()->route('admin.add.salary')->with('error', 'Already paid for this month to this employee!');
        }

    }
    public function updateSalary(Request $request,  $id)
    {
        $salary = Salary::findOrFail($id);
        $request->validate([
            'paid'          => 'required',
            'paid_total'    => 'required'
        ]);

        $salary->employee_id = $request->employee_id;
        $salary->position = $request->position;
        $salary->month = $request->month;
        $salary->year = $request->year;
        $salary->advance = $request->advance;
        $salary->paid = $request->paid;
        $salary->paid_total = $request->paid_total;

        $salary->save();

        return redirect()->route('admin.all.salary')->with('success', 'Salary Updated Successfully!');

    }

    public function deleteSalary($id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();
        return redirect()->route('admin.all.salary')->with('success', 'Salary deleted successfully !');
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

    public function editAdvanceSalary($id)
    {
        $advanceSalary = AdvanceSalary::findOrFail($id);
        return view('pages.salary.advance-salary-edit', compact('advanceSalary'));
    }
    public function updateAdvanceSalary(Request $request, $id)
    {
        $advanceSalary = AdvanceSalary::findOrFail($id);
        $request->validate([
            'month'     => 'required',
            'year'      => 'required',
            'advance'   => 'required',
        ]);

        $advanceSalary->employee_id     = $advanceSalary->employee_id;
        $advanceSalary->position        = $advanceSalary->position;
        $advanceSalary->month           = $request->month;
        $advanceSalary->year            = $request->year;
        $advanceSalary->advance         = $request->advance;

        $advanceSalary->save();
        return redirect()->route('admin.advance.salary.all')->with('success', 'Advance salary updated successfully !');
    }

    public function deleteAdvanceSalary($id)
    {
        $advanceSalary = AdvanceSalary::findOrFail($id);
        $advanceSalary->delete();
        return redirect()->route('admin.advance.salary.all')->with('success', 'Advance salary deleted successfully !');
    }
}
