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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');

Route::middleware('auth')->group(function () {
    Route::resource('/expensesCategory/', App\Http\Controllers\ExpensesCategoryController::class);
    Route::resource('/budget', App\Http\Controllers\BudgetController::class);
    Route::resource('/expenses', App\Http\Controllers\ExpensesController::class);
    Route::resource('/plans', App\Http\Controllers\PlanController::class);

});

