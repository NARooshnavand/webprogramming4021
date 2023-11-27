<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;

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