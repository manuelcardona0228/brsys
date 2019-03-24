<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', 'InicioController@index');


Route::resource('barberos', 'BarberoController');
Route::get('/verBarbero', 'BarberoController@Ver');
Route::get('/editarBarbero', 'BarberoController@Editar');


Route::resource('barberias', 'BarberiaController');
Route::get('/verBarberia', 'BarberiaController@ver');
Route::get('/editarBarberia', 'BarberiaController@editar');


Route::resource('cargos', 'CargoController');
Route::get('/verCargo', 'CargoController@ver');
Route::get('/editarCargo', 'CargoController@editar');


Route::resource('sedes', 'SedeController');
Route::get('/verSede', 'SedeController@ver');
Route::get('/editarSede', 'SedeController@editar');


Route::resource('turnos', 'TurnoController');
Route::get('/verTurno', 'TurnoController@ver');
Route::get('/editarTurno', 'TurnoController@editar');


Route::resource('users', 'UserController');
Route::get('/verUsers', 'UserController@ver');
Route::get('/editarUsers', 'UserController@editar');
Route::get('/inicioUser', 'UserController@inicio');
Route::get('/pedirTurno', 'UserController@pedirTurno');
Route::get('/buscarBarbero', 'UserController@buscarBarberos');
Route::get('/perfilBarbero', 'UserController@verPerfil');
Route::get('/buscarServicios', 'UserController@buscarServicios');
Route::get('/verServicios', 'UserController@verServicios');



Route::resource('cargo', 'CargoController');
Route::get('/verCargo', 'CargoController@ver');
Route::get('/editarCargo', 'CargoController@editar');


Route::resource('admins', 'AdminController');
Route::get('/verAdmin', 'AdminController@ver');
Route::get('/editarAdmin', 'AdminController@editar');

Route::resource('servicios', 'ServicioController');
Route::get('/verServicio', 'ServicioController@ver');
Route::get('/editarServicio', 'ServicioController@editar');

Route::resource('perfiles', 'PerfilController');
Route::get('/verPerfil', 'PerfilController@ver');
Route::get('/editarPerfil', 'PerfilController@editar');

