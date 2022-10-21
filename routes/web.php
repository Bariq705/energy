<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\energycr;
use App\Http\Controllers\dashboardcr;


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
    return view('bensin.index');
});

Route::get('/bensin',[energycr::class,'index']);
Route::get('/home',[dashboardcr::class,'index']);
