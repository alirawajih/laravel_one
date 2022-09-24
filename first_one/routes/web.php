<?php

use App\Http\Controllers\DataIncloud;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticCon;

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
Route::get('/show',function(){return view('show');});
Route::get('/', [StaticCon::class,'index'])->name('index');
Route::get('/one', [StaticCon::class,'one'])->name('one');
Route::resource('new',DataIncloud::class);
