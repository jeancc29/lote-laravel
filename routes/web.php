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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login/acceder', 'LoginController@acceder')->name('login.acceder');

Route::get('/loterias', 'LotteriesController@index')->name('loterias');
Route::get('/loterias/bloqueos', 'LotteriesController@bloqueos')->name('loterias.bloqueos');
Route::get('/principal', 'PrincipalController@index')->name('principal');
Route::get('/principal/ticket', 'PrincipalController@ticket')->name('principal.ticket');
Route::get('/principal/pruebahttp', 'PrincipalController@pruebahttp')->name('principal.pruebahttp');


Route::get('/premios', 'AwardsController@index')->name('premios');

Route::get('/bancas', 'BranchesController@index')->name('bancas');


Route::get('/usuarios', 'UsersController@index')->name('usuarios');
Route::get('/horarios', 'HorariosController@index')->name('horarios');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/bloqueos', 'BlockslotteriesController@index')->name('bloqueos');