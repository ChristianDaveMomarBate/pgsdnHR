<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDataController;

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
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/employees', [EmployeeDataController::class, 'getEmployees'])->name('getEmployees');
Route::get('/employees/print-pdf', [EmployeeDataController::class, 'printPdf'])->name('employees.printPdf');

Route::get('/employees/leaves', [EmployeeDataController::class, 'getLeaves'])->name('getLeaves');
Route::get('/employees/leaves/print-pdf', [EmployeeDataController::class, 'leavesprintPdf'])->name('leaves.printPdf');


require __DIR__.'/auth.php';

// Auth::routes();