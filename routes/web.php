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


Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
    Route::group(['prefix' => 'test-management', 'as' => 'test-management.'], function () {
        Route::get('/', [App\Http\Controllers\Company\TestManagementController::class, 'index'])->name('index');

        Route::group(['prefix' => 'grade', 'as' => 'grade.'], function () {
            Route::get('/', [App\Http\Controllers\Company\GradeController::class, 'index'])->name('index');
            Route::get('add', [App\Http\Controllers\Company\GradeController::class, 'create'])->name('create');
            Route::post('add', [App\Http\Controllers\Company\GradeController::class, 'store'])->name('store');
        });
    });
});