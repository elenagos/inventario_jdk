<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\proveedorController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/NuevaMarca', function (){
//     return view('formulario_marca');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('formulario_marca', function () {
    return view('formulario_marca');
})->name("formulario_marca");


Route::get('/NuevoProveedor', function (){
    return view('formulario_proveedor');
});

Route::post("GuardarMarca", [marcaController::class,"insertar"])->name("marca.insertar");

Route::post("GuardarProveedor", [proveedorController::class,"insertar"])->name("proveedor.insertar");
