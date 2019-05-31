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

//Route::get('/inicioAdmin', 'StartController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'systemAdmin'], function(){

    Route::resource('barbershopAdministrators', 'BarbershopAdministratorController');
    Route::resource('barbers', 'BarberController');
    Route::resource('barbershops', 'BarbershopController');
    Route::resource('headquarters', 'HeadquarterController');
    Route::resource('turns', 'TurnController');
    Route::resource('customers', 'CustomerController');
    Route::resource('typeUsers', 'TypeUserController');
    Route::resource('systemAdministrators', 'SystemAdministratorController');
    Route::resource('services', 'ServiceController');
    Route::resource('profiles', 'ProfileController');
    Route::resource('departments', 'DepartmentController');
    Route::resource('cities', 'CityController');
    Route::get('/city/{id}', 'CustomerController@getCities');

});

Route::group(['middleware' => 'barbershopAdmin'], function(){
    Route::resource('barberAdmins', 'BarAdmBarberController');
    Route::resource('barbershopAdmins', 'BarAdmBarbershopController');
    Route::resource('headquarterAdmins', 'BarAdmHeadquarterController');
    Route::resource('serviceAdmins', 'BarAdmServiceController');
    Route::resource('customerAdmins', 'BarAdmCustomerController');
    Route::get('/city/{id}', 'CustomerController@getCities');
    Route::get('/headquarter/{id}', 'UserController@getHeadquarters');
});

Route::group(['middleware' => 'barber'], function(){

    Route::get('/inicioBarbero', 'BarberController@inicio');
    Route::get('/listaTurnos', 'BarberController@verTurnos');
    Route::get('/historialTurnos', 'BarberController@historialTurnos');
    Route::get('/agendaBarbero', 'EventController@index');
    Route::resource('turnBarbers', 'TurnBarController');
    Route::get('/turnosPendientes', 'BarberController@turnosPendientes');
});

Route::group(['middleware' => 'customer'], function(){

    Route::get('/inicioUser', 'UserController@inicio');
    Route::get('/pedirTurno', 'UserController@create');
    Route::resource('/users', 'UserController');
    Route::get('/buscarBarbero', 'UserController@buscarBarberos');
    Route::get('/perfilBarbero', 'UserController@verPerfil');
    Route::get('/buscarServicios', 'UserController@buscarServicios');
    Route::get('/verServicios', 'UserController@verServicios');
    Route::get('/headquarter/{id}', 'UserController@getHeadquarters');
    Route::get('/barber/{id}', 'UserController@getBarbers');
    Route::get('/service/{id}', 'UserController@getServices');
});


Route::get('/errorSysAdmin', ['as' => 'vistaErrorSysAdmin.error', function(){
    return view('vistaErrorSysAdmin.error');
}]);

Route::get('/errorBarberAdmin', ['as' => 'vistasAdminBarberia.error', function(){
    return view('vistasAdminBarberia.error');
}]);

Route::get('/errorCustomer', ['as' => 'vistasCliente.error', function(){
    return view('vistasCliente.error');
}]);

Route::get('/errorBarber', ['as' => 'vistasBarbero.error', function(){
    return view('vistasBarbero.error');
}]);








