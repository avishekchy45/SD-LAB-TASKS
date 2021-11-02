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
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'home']);
Route::get('/listofem', [EmployeeController::class, 'listofem']);
Route::post('/addemployee', [EmployeeController::class, 'addemp']);
Route::get('/update/{id}', [EmployeeController::class, 'update']);
Route::post('/updatefinal/{id}', [EmployeeController::class, 'updatefinal']);
Route::get('/delete/{id}', [EmployeeController::class, 'delete']);
