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
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
    return view('home');
});
    Route::resource('employee', EmployeesController::class);
    Route::GET('employee/vacation/{id}', 'EmployeesController@vacation')->name('employee.vacation');
    Route::GET('employee/certification/{id}', 'EmployeesController@certification')->name('employee.certification');
});




