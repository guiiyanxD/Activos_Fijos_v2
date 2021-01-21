<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubroController;

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
  //  return view('/dashboard');
//})->name('dashboard');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //  return view('dashboard');
//})->name('dashboard');
Route::get('/', function(){
   return view('welcome');
});
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
//Route::get('rubros/index/',[RubroController::class,"index"])->name('rubros.index');
//Route::get('rubros/show/',[RubroController::class,"show"])->name('rubros.show');
//Route::get('rubros/create/',[RubroController::class,"create"])->name('rubros.create');

Route::resource('rubros', RubroController::class);
Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
