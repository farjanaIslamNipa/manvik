<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('manvik');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function() {
    Route::get(uri:'/', action:[IndexController::class, 'index'])->name('index');
    Route::get(uri:'/user', action:[UsersController::class, 'index'])->name('users.index');
    Route::get(uri:'/user/{user}/role', action:[UsersController::class, 'assignRoleView'])->name('users.assign.role.view');
    Route::post(uri:'/user/{user}/assign-role', action:[UsersController::class, 'assignRole'])->name('users.roles.assign');
    Route::delete(uri:'/user/{user}/remove-role/{role}', action:[UsersController::class, 'removeRole'])->name('users.roles.remove');
    Route::get(uri:'/employee', action:[EmployeeController::class, 'allEmployee'])->name('all.employee.show');

    // EMPLOYEE ROUTES
    Route::get(uri:'/employee/add', action:[EmployeeController::class, 'addEmployee'])->name('add.employee');
});
// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

require __DIR__.'/auth.php';
