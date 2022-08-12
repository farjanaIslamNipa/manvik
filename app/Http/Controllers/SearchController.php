<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function advanceSalaryEmployeeSearch(Request $request)
    {
        $employee_query     = $request->employee_query;
        $phone_query        = $request->phone_query;

        $searchedEmployees = Employee::where('name', 'like', "%$employee_query%")
                                       ->orWhere('phone', 'like', "%$phone_query%")
                                       ->get();

        return view('pages.salary.pay-advance-salary', compact('searchedEmployees'));
    }
}
