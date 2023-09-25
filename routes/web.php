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
use App\Http\Controllers\manageStudentController;

Route::get('/', [manageStudentController::class,"index"])->name("index") ;



 Route::get('/detailStudent/{id}', [manageStudentController::class, "show"])->name("indexWithId");

 //Route::get('/detailStudent', [manageStudentController::class, "show"])->name("indexWithId");

 Route::get('/detailStudentform', [manageStudentController::class, "showFormular"])->name("addStudentForm");  
/* 
 Route::get('/detailStudent', function(){
    return view('detailStudent');
  }); 
   */
//Route::get('/detail')
   Route::post('student/store', [manageStudentController::class,"store"])->name('studentStore');

