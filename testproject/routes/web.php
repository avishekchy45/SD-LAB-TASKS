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
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;

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
Route::get('/home/{department}', function ($dept) {
    echo "$dept DEPARTMENT<br>";
    return view('others.department');
});
Route::get('/home/{department}/{batch}/{section?}', [HomeController::class, 'department']);
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

Route::get('/login', [AuthController::class, 'login']);
Route::post('/logincheck', [AuthController::class, 'logincheck']);
Route::group(['middleware' => 'checkloggedin'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::group(['middleware' => 'isstudent'], function () {
        Route::post('/addstudent', [HomeController::class, 'studentadd']);
        Route::get('/listofstu', [HomeController::class, 'studentlist']);
        Route::get('/update/{id}', [HomeController::class, 'update']);
        Route::post('/updatefinal/{id}', [HomeController::class, 'updatefinal']);
        Route::get('/delete/{id}', [HomeController::class, 'delete']);
        Route::get('/home', [HomeController::class, 'home']);
    });
    Route::group(['middleware' => 'isteacher'], function () {
        Route::get('/teacher', [TeacherController::class, 'teacherhome']);
        Route::post('/addteacher', [TeacherController::class, 'teacheradd']);
        Route::get('/listoftea', [TeacherController::class, 'teacherlist']);
        Route::get('/editteacher/{id}', [TeacherController::class, 'editteacher']);
        Route::post('/updateteacher/{id}', [TeacherController::class, 'updateteacher']);
        Route::get('/deleteteacher/{id}', [TeacherController::class, 'deleteteacher']);
    });
});

Route::get('/admin', function () {
    return view('admin/pages/adminhome');
});
Route::get('/tables', function () {
    return view('admin/pages/tables');
});
Route::get('/register', function () {
    return view('admin/pages/signup');
});

Route::get('/upload', [HomeController::class, 'imageupload']);
Route::post('/uploadconfirm', [HomeController::class, 'uploadconfirm']);
