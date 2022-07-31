<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function addSalary()
    {
        return view('pages.salary.add-salary');
    }
    public function allSalary()
    {

    }
}
