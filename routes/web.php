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

Route::get('/', function () {
    return view('usuario/index');
});
Route::get('catalogo', function (){
    return view('usuario/catalogo');
});
Route::get('servicios', function (){
    return view ('usuario/servicio');
});
Route::get('contactanos', function (){
    return view ('usuario/contactanos');
});
Route::get('camas', function(){
    return view('usuario/camas');
});
Route::get('modelo_1', function(){
    return view('usuario/modelo');
});
Route::get('perfil', function(){
    return view('usuario/perfil');
});
Route::get('mantenimiento', function(){
    return view('usuario/mantenimiento');
});
Route::get('reparacion', function(){
    return view('usuario/reparacion');
});

// rutas para el adminstrador

Route::resource('admintablero',App\Http\Controllers\TableroController::class);
Route::resource('adminempleados',App\Http\Controllers\EmpleadoController::class);
Route::resource('adminpedidos',App\Http\Controllers\PedidoController::class);
Route::resource('adminmuebles',App\Http\Controllers\MuebleController::class);
Route::resource('admincorreos',App\Http\Controllers\CorreoController::class);
Route::resource('adminclientes',App\Http\Controllers\ClienteController::class);
Route::resource('adminperfil',App\Http\Controllers\PerfilController::class);

// Rutas para el capturista

Route::resource('captablero',App\Http\Controllers\Cap\TableroController::class);
Route::resource('capempleados',App\Http\Controllers\Cap\EmpledoController::class);
Route::resource('cappedidos',App\Http\Controllers\Cap\PedidoController::class);
Route::resource('capmuebles',App\Http\Controllers\Cap\MuebleController::class);
Route::resource('capcorreos',App\Http\Controllers\Cap\CorreoController::class);
Route::resource('capclientes',App\Http\Controllers\Cap\ClienteController::class);
Route::resource('capperfil',App\Http\Controllers\Cap\PerfilController::class);


// Rutas para el carpintero

Route::resource('cartablero',App\Http\Controllers\Car\TableroController::class);
Route::resource('carpedidos',App\Http\Controllers\Car\PedidoController::class);
Route::resource('carperfil',App\Http\Controllers\Car\PerfilController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');



Route::get('res', function(){
    return view('');
});

//ruta para cambiar la contraseña

Route::get('user/password', 'App\Http\Controllers\UserController@password');
Route::post('user/updatepassword', 'App\Http\Controllers\UserController@updatePassword');