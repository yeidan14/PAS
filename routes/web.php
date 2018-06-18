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
Route::get('/home', [
    'uses' => 'lab_controller@home',
    'as' => 'path_home',
]);

Route::get('/Registrar',[
    'uses' => 'lab_controller@registro',
    'as' => 'path_registrar',
]);

Route::get('/laboratorio',[
    'uses' => 'lab_controller@laboratorio',
    'as' => 'path_laboratorio',
]);
Route::get('/elemento',[
    'uses' => 'lab_controller@elemento',
    'as' => 'path_elemento',
]);

Route::get('/promedia',[
    'uses' => 'lab_controller@promedia',
    'as' => 'path_promedia',
]);
Route::get('/prestamos',[
    'uses' => 'lab_controller@prestamo',
    'as' => 'path_prestamo',
]);
Route::get('/contacto',[
    'uses' => 'lab_controller@contacto',
    'as' => 'path_contacto',
]);

Route::get('login',[
    'uses' => 'login_Controller@login',
    'as' => 'path_login',
]);
