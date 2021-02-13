<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SolicitudCompraController;
use App\Http\Controllers\SolicitudMovimientoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Edificio;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubroController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dasboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/', function(){
   return view('welcome');
});
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');




Route::resource('rubros', RubroController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('estados', EstadoController::class);
Route::resource('usuarios', UsuarioController::class);
route::get('/usuarios/{id}/habilitar_usuario', [UsuarioController::class,'habilitar'])->name('usuarios.habilitar');
route::get('/usuarios/{id}/deshabilitar_usuario', [UsuarioController::class,'deshabilitar'])->name('usuarios.deshabilitar');
route::resource('proveedores', ProveedorController::class);
route::resource('ciudades', CiudadController::class);
route::resource('edificios', EdificioController::class);
route::resource('departamentos', DepartamentoController::class);
route::resource('solicitudes/movimientos', SolicitudMovimientoController::class);
route::resource('solicitudes/compras', SolicitudCompraController::class);
route::post('solicitudes/movements/llenarformulario',[SolicitudMovimientoController::class,'llenarformulario'])->name('movimientos.formulario');
route::post('solicitudes/shop/llenarformulario',[SolicitudCompraController::class,'llenarformulario'])->name('compras.formulario');


route::get('prueba/proveedor&contacto',function (){
    $proveedor = Proveedor::with('contacto')->get();
    $proveedor_direccion = $proveedor->contacto->direccion;
    return ['relacion_proveedor_contacto'=> $proveedor,'proveedor_direccion'=>$proveedor_direccion];
})->name('prueba/proveedor');


route::get('prueba/ciudades/edificios',function (){
    $edificio = Edificio::with('ciudad')->where('ciudad_id','=','3')->get();
    return ['edificio'=> $edificio];
})->name('prueba/ciudad');


//route::delete('/prueba/{id}/destroy/proveedores/',[\App\Http\Controllers\ProveedorController::class,'prueba'])->name('proveedores.prueba');
