<?php

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
});
// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

require __DIR__.'/auth.php';
