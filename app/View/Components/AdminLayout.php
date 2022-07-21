<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AdminLayout extends Component
{
        /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $users = User::all();
        return view('layouts.admin', compact('users'));
    }
}
