<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InformationOneController;
use App\Http\Controllers\ReturnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[IndexController::class,'index']);
Route::get('/service',[IndexController::class,'service']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/law',[IndexController::class,'law']);

Route::get('/info',[ReturnController::class,'info_view']);
Route::get('/info1',[ReturnController::class,'info_one']);
Route::get('/info2',[ReturnController::class,'info_two']);
Route::get('/info3',[ReturnController::class,'info_three']);
Route::get('/viewform',[ReturnController::class,'showtaxform']);

Route::get('/generate-pdf',[PdfController::class,'generate_pdf']);
Route::get('/download-pdf',[PdfController::class,'download_pdf']);

// Info One Route Start
Route::post('/setInfoOneData',[InformationOneController::class,'onSaveInfoOneData']);
Route::post('/updateInfoOneData',[InformationOneController::class,'onUpdateInfoOneData']);
Route::get('/getInfoOneDataToView',[InformationOneController::class,'getInfoOneData']);
// Info One Route End
