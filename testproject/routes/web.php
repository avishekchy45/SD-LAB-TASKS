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
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('welcome');
});
/*
Route::get('/home', function () {
    return view('others.home');
});
*/
Route::get('/home', [HomeController::class, 'home']);

Route::get('/home/{department}', function ($dept) {
    echo "$dept DEPARTMENT<br>";
    return view('others.department');
});
/*
Route::get('/home/{department}/{batch}/{section?}', function ($dept, $batch, $sec="no section selected") {
    echo "$dept DEPARTMENT ";
    echo "<br>";
    echo " $batch BATCH";
    echo "<br>";
    echo " $sec Section";
    echo "<br>";
    return view('others.department');
});
*/
Route::get('/home/{department}/{batch}/{section?}', [HomeController::class, 'department']);
Route::post('/addstudent', [HomeController::class, 'studentadd']);
Route::get('/listofstu', [HomeController::class, 'studentlist']);
