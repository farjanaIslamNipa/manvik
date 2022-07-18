<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $userWithoutRole = User::doesntHave('roles')->get();
        return view('admin.index', compact('userWithoutRole'));
    }
}
