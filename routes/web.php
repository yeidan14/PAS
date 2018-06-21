<?php

/*
|--------------------------------------------------------------------------
| Web <Routes></Routes>
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes <ar></ar>e <load></load>ed by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('postLogin', function() {
    return view('name');
});


Route::get('/home', [
    'uses' => 'lab_controller@home',
    'as' => 'path_home',
]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/user', [
    'uses' => 'lab_controller@user',
    'as' => 'path_user',
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

Route::get('/adminpanel',[
    'uses' => 'lab_controller@adminpanel',
    'as' => 'path_adminpanel',
]);

Route::get('/useradmin',[
    'uses' => 'lab_controller@useradmin',
    'as' => 'path_useradmin',
]);

Route::get('/adminsolicitud',[
    'uses' => 'lab_controller@adminsolicitud',
    'as' => 'path_adminsolicitud',
]);

Route::get('correoadmin',[
    'uses' => 'lab_controller@correoadmin',
    'as' => 'path_correoadmin',
]);



///////////


Route::post('postloginuser', [

'uses' => 'ControllerLogin@postLogin',
    'as'   => 'postloginuser',

]);

Route::post('postloginadmin', [

'uses' => 'ControllerLogin@postLoginadmin',
    'as'   => 'postloginadmin',

]);

Route::post('postlogin', [

'uses' => 'ControllerLogin@exito',
    'as'   => 'path_exito',

]);




Route::get('postlogout', [

'uses' => 'ControllerLogin@logout',
    'as'   => 'path_logout',
]);


Route::get('postlogoutadmin', [

'uses' => 'ControllerLogin@logoutadmin',
    'as'   => 'path_logoutadmin',
]);

Route::post('postconsultae', [

'uses' => 'ControllerLogin@consultaElemento',
    'as'   => 'path_consultae',
]);



Route::post('postregistro', [

'uses' => 'ControllerLogin@registrar',
    'as'   => 'path_postregistro',
]);


Route::post('postsolicitud', [

'uses' => 'ControllerLogin@registrarsolicitudElemento',
    'as'   => 'registrosolicitud',
]);


Route::get('alertalogin',[
    'uses' => 'lab_controller@alertalogin',
    'as' => 'path_alerta',
]);


Route::get('elementos',[
    'uses' => 'listarController@create',
    'as' => 'path_elementos',
]);






