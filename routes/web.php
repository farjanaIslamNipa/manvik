<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FabricsController;
use App\Http\Controllers\FabricTypeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SearchController;
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

    //SEARCH ROUTES
    Route::get(uri:'advance-salary/search/employee', action:[SearchController::class, 'advanceSalaryEmployeeSearch'])->name('advance.salary.search.employee');

    //POSITION ROUTES
    Route::get(uri:'/positions', action:[PositionController::class, 'allPositions'])->name('all.positions.show');
    Route::get(uri:'/positions/create', action:[PositionController::class, 'addPosition'])->name('position.add');
    Route::post(uri:'/positions/store', action:[PositionController::class, 'storePosition'])->name('position.store');
    Route::get(uri:'/positions/edit/{id}', action:[PositionController::class, 'editPosition'])->name('position.edit');
    Route::post(uri:'/positions/update/{id}', action:[PositionController::class, 'updatePosition'])->name('position.update');
    Route::delete(uri:'/positions/delete/{id}', action:[PositionController::class, 'deletePosition'])->name('position.remove');

    // EMPLOYEE ROUTES
    Route::get(uri:'/employee', action:[EmployeeController::class, 'allEmployee'])->name('all.employee.show');
    Route::get(uri:'/employee/add', action:[EmployeeController::class, 'addEmployee'])->name('add.employee');
    Route::get(uri:'/employee/update', action:[EmployeeController::class, 'updateEmployee'])->name('update.employee');
    Route::post(uri:'/employee/store', action:[EmployeeController::class, 'storeEmployee'])->name('store.employee');
    Route::get(uri:'/employee/edit/{id}', action:[EmployeeController::class, 'editEmployee'])->name('edit.employee');
    Route::post(uri:'/employee/update/{id}', action:[EmployeeController::class, 'updateEmployeeInfo'])->name('update.employee.info');
    Route::get(uri:'/employee/delete/{id}', action:[EmployeeController::class, 'deleteEmployee'])->name('delete.employee');

    // SALARY ROUTES
    Route::get(uri:'/pay-advance-salary', action:[SalaryController::class, 'advanceSalary'])->name('advance.salary.add');
    Route::get(uri:'/edit-advance-salary/{id}', action:[SalaryController::class, 'editAdvanceSalary'])->name('advance.salary.edit');
    Route::post(uri:'/update-advance-salary/{id}', action:[SalaryController::class, 'updateAdvanceSalary'])->name('advance.salary.update');
    Route::get(uri:'/advance-salary/delete/{id}', action:[SalaryController::class, 'deleteAdvanceSalary'])->name('advance.salary.delete');
    Route::get(uri:'/all-advance-salary', action:[SalaryController::class, 'allAdvanceSalary'])->name('advance.salary.all');
    Route::post(uri:'/add-advance-salary/store', action:[SalaryController::class, 'StoreAdvanceSalary'])->name('store.advance.salary');
    Route::get(uri:'/pay-salary', action:[SalaryController::class, 'paySalary'])->name('add.salary');
    Route::get(uri:'/all-salary', action:[SalaryController::class, 'allSalary'])->name('all.salary');
    Route::post(uri:'/add-salary/store/{id}', action:[SalaryController::class, 'StoreSalary'])->name('store.salary');
    Route::post(uri:'/add-salary/edit/{id}', action:[SalaryController::class, 'editSalary'])->name('edit.salary');

    //CREATE FABRICS TYPE ROUTES
    Route::get(uri:'/fabrics', action:[FabricTypeController::class, 'showFabrics'])->name('fabrics.show');
    Route::get(uri:'/fabrics/create', action:[FabricTypeController::class, 'addFabrics'])->name('fabrics.add');
    Route::post(uri:'/fabrics/store', action:[FabricTypeController::class, 'storeFabrics'])->name('fabrics.store');
    Route::get(uri:'/fabrics/edit/{id}', action:[FabricTypeController::class, 'editFabrics'])->name('fabrics.edit');
    Route::post(uri:'/fabrics/update/{id}', action:[FabricTypeController::class, 'updateFabrics'])->name('fabrics.update');
    Route::delete(uri:'/fabrics/delete/{id}', action:[FabricTypeController::class, 'deleteFabrics'])->name('fabrics.remove');

    // FABRICS ROUTES
    Route::get(uri:'/fabrics-expenditure-list', action:[FabricsController::class, 'showFabricsExpenditure'])->name('fabrics.expenditure.show');
    Route::get(uri:'/fabrics-expenditure-list/add', action:[FabricsController::class, 'addFabricsExpenditure'])->name('fabrics.expenditure.add');
    Route::post(uri:'/fabrics-expenditure-list/store', action:[FabricsController::class, 'storeFabricsExpenditure'])->name('fabrics.expenditure.store');
    Route::get(uri:'/fabrics-expenditure/edit/{id}', action:[FabricsController::class, 'editFabricsExpenditure'])->name('fabrics.expenditure.edit');
    Route::get(uri:'/fabrics-expenditure/update/{id}', action:[FabricsController::class, 'updateFabricsExpenditure'])->name('fabrics.expenditure.update');

});
// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

require __DIR__.'/auth.php';
