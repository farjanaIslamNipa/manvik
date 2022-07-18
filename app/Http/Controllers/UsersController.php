<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.user-list', compact('users'));
    }
    public function assignRoleView(User $user)
    {
        $roles = Role::all();
        return view('users.user-assign-role', compact('user', 'roles'));
    }
    public function assignRole(Request $request, User $user)
    {
        // dd($request->role);
        if($user->hasRole($request->role)){

            return back()->with('info', 'role exists');
        }
        $user->assignRole($request->role);
        return back()->with('success', 'role assigned');
    }
    public function removeRole(User $user, Role $role)
    {
        if($user->hasRole($role)){
            $user->removeRole($role);

            return back()->with('error', 'Role Removed');
        }
        return back()->with('info', 'Role does not exist');
    }
}
