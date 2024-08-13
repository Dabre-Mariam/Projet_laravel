<?php


use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SchoolController::class, 'index'])->name('vue');

Route::post('insertion',[SchoolController::class, 'store'])->name('enregistrement');
Route::get('pageEnregistrement',[SchoolController::class,'create'])->name('affichageEnregistrement');
Route::get('affichageSimple/{id}',[SchoolController::class, 'show']);
Route::get('/edit-objet/{id}',[SchoolController::class, 'edit']);
Route::put('/update-objet/{id}',[SchoolController::class, 'update']);
Route::delete('/delete-objet/{id}',[SchoolController::class, 'destroy']);

