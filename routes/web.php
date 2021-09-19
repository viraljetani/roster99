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
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','role:super-admin'])->group(function () {
    Route::resource('/organization', "App\Http\Controllers\OrganizationController");
    Route::resource('/role',"App\Http\Controllers\RoleController");
    Route::resource('/permission',"App\Http\Controllers\PermissionController");
});

Route::middleware(['auth','can:manage-employees'])->group(function () {
    Route::resource('/user', "App\Http\Controllers\UserController");
});

Auth::routes();
