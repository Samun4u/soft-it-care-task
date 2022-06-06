<?php

use App\Http\Controllers\TaskController;
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

Route::get('clear', function () {
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
    return redirect()->back();
});

Route::get('task-one',[TaskController::class,'taskOne'])->name('task.one');
Route::get('task-two',[TaskController::class,'taskTwo'])->name('task.two');
Route::get('task-three',[TaskController::class,'taskThree'])->name('task.three');
Route::get('task-four',[TaskController::class,'taskFour'])->name('task.four');
Route::get('print-pdf',[TaskController::class,'printPdf'])->name('print.pdf');
Route::get('/', function () {
    return view('welcome');
});

