<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('/reports',[App\Http\Controllers\ReportController::class,'index'])->name('report');
Route::get('/myProfile',[App\Http\Controllers\ProfileController::class,'profile'])->name('myProfile');
Route::resource('/plans', App\Http\Controllers\PlanController::class);



Route::middleware('auth')->group(function () {
    Route::resource('/expensesCategory/', App\Http\Controllers\ExpensesCategoryController::class);
    Route::resource('/budget', App\Http\Controllers\BudgetController::class);
    Route::resource('/expenses', App\Http\Controllers\ExpensesController::class);

});

