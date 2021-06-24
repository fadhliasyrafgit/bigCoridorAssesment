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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.show');

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.show');

Route::get('/employees/{company}', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.show');

Route::get('/newcompany', [App\Http\Controllers\DashboardController::class, 'showCompanyForm'])->name('showCompanyForm.show');

Route::post('/newcompany', [App\Http\Controllers\DashboardController::class, 'newcompany'])->name('newcompany.store');

Route::delete('/newcompany/{id}', [App\Http\Controllers\DashboardController::class, 'destroyCompany'])->name('newcompany.destroy');

Route::get('/newemployee/{ID}', [App\Http\Controllers\EmployeesController::class, 'showEmployeeForm'])->name('showEmployeeForm.show');

Route::post('/newemployee', [App\Http\Controllers\EmployeesController::class, 'newemployee'])->name('newemployee.store');

Route::delete('/newemployee/{id}', [App\Http\Controllers\EmployeesController::class, 'destroyEmployee'])->name('newemployee.destroy');
