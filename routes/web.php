<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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
/*
Route::get('/aboutus', [Homecontroller::class,'about']);
Route::get('/contactus', [Homecontroller::class,'contact']);
Route::get('/gallery', [Homecontroller::class,'gallery']);
Route::get('/myinfo', [Homecontroller::class,'myInfo']);
Route::get('/video', [Homecontroller::class,'video']);
*/

Route::resource('students', StudentController::class);