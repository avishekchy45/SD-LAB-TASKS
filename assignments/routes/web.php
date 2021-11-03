<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/logincheck', [AuthController::class, 'logincheck']);

Route::group(['middleware' => 'checkloggedin'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/listofem', [EmployeeController::class, 'listofem']);

    Route::group(['middleware' => 'isemployee'], function () {
        Route::get('/update/{id}', [EmployeeController::class, 'update']);
        Route::post('/updatefinal/{id}', [EmployeeController::class, 'updatefinal']);
    });

    Route::group(['middleware' => 'isemployer'], function () {
        Route::get('/empform', [EmployeeController::class, 'employeeform']);
        Route::post('/addemployee', [EmployeeController::class, 'addemp']);
        Route::get('/delete/{id}', [EmployeeController::class, 'delete']);
    });
});
