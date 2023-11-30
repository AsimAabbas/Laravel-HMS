<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });  
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
              // file name                         function name
Route::get ('/add_doctor',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/addspeciality',[AdminController::class,'addspeciality']);

Route::post('/appointment',[HomeController::class,'appointment']);
Route::get ('/myappointment',[HomeController::class,'myappointment']);
Route::get ('/doctors',[HomeController::class,'doctors']);


Route::get ('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get ('/showappointment',[AdminController::class,'showappointment']);
Route::get ('/cancel_appointment/{id}',[AdminController::class,'cancel_appointment']);


Route::get ('/approved/{id}',[AdminController::class,'approved']);
Route::get ('/cancel/{id}',[AdminController::class,'cancel']);
Route::get ('/showdoctor',[AdminController::class,'showdoctor']);


Route::get ('/add_speciality',[AdminController::class,'add_speciality']);
Route::get ('/body',[AdminController::class,'doctorslist']);
Route::get ('/add_doctor',[AdminController::class,'showspeciality']);


Route::get ('/add_speciality',[AdminController::class,'show_speciality']);
Route::get ('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get ('/deleteappointment/{id}',[AdminController::class,'deleteappointment']);


Route::get ('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);