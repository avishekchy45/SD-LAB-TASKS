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
Route::get('/about', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('others.home');
});
Route::get('/home/{department}', function ($dept) {
    echo "$dept DEPARTMENT<br>";
    return view('others.department');
});
Route::get('/home/{department}/{batch}', function ($dept, $batch) {
    echo "$dept DEPARTMENT <br> $batch BATCH<br>";
    return view('others.department');
});
Route::get('/home/{department}/{batch}/{section?}', function ($dept, $batch, $sec) {
    echo "$dept DEPARTMENT ";
    echo "<br>";
    echo " $batch BATCH";
    echo "<br>";
    echo " $sec Section";
    return view('others.department');
});
