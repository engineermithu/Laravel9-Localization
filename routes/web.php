<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
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

Route::get('lang',[LanguageController::class,'index']);
Route::get('lang-change',[LanguageController::class,'langChange'])->name('lang.change');
