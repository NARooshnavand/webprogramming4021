<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\LessonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Crud operation for Prof table
//Show add prof
Route::get('/addprof', function () {
    return view('admin.profs.add');
});
//Show list of profs
Route::get('/proflist',[ProfController::class,'index'])->name('proflist');
//Save prof
Route::post('/addprof',[ProfController::class,'save_prof']); 
//
Route::get('/showprof/{id}',[ProfController::class,'show_prof']);

Route::get('/edit/{id}',[ProfController::class,'edit']);
Route::put('/edit/{id}',[ProfController::class,'save'])->name('saveprof');
Route::delete('/delete/{id}',[ProfController::class,'delete'])->name('deleteprof');
Route::resource('lesson',LessonController::class);
