<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    
    //users
    Route::resource('/admin/user', App\Http\Controllers\Admin\User\UserController::class);
    Route::resource('/admin/role', App\Http\Controllers\Admin\Role\RoleController::class);
    Route::resource('/admin/gender', App\Http\Controllers\Admin\Gender\GenderController::class);

});
