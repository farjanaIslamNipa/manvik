<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SalaryController;
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

    // EMPLOYEE ROUTES
    Route::get(uri:'/employee', action:[EmployeeController::class, 'allEmployee'])->name('all.employee.show');
    Route::get(uri:'/employee/add', action:[EmployeeController::class, 'addEmployee'])->name('add.employee');
    Route::get(uri:'/employee/update', action:[EmployeeController::class, 'updateEmployee'])->name('update.employee');
    Route::post(uri:'/employee/store', action:[EmployeeController::class, 'storeEmployee'])->name('store.employee');
    Route::get(uri:'/employee/edit/{id}', action:[EmployeeController::class, 'editEmployee'])->name('edit.employee');
    Route::post(uri:'/employee/update/{id}', action:[EmployeeController::class, 'updateEmployeeInfo'])->name('update.employee.info');
    Route::get(uri:'/employee/delete/{id}', action:[EmployeeController::class, 'deleteEmployee'])->name('delete.employee');

    // SALARY ROUTES
    Route::get(uri:'/add-salary', action:[SalaryController::class, 'addSalary'])->name('add.salary');
    Route::get(uri:'/all-salary', action:[SalaryController::class, 'allSalary'])->name('all.salary');
    Route::get(uri:'/add-salary/store', action:[SalaryController::class, 'StoreSalary'])->name('store.salary');

});
// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

require __DIR__.'/auth.php';
