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



///////rutas nuevas 


Route::get('/loginUser', [

    'uses' => 'ControllerLogin@showLoginForm',
    'as'   => 'auth_index_path',

]);

Route::post('/SitePersonal', [

    'uses' => 'ControllerLogin@site',
    'as'   => 'auth_login_path',

]);

Route::post('/logoutUser', [

    'uses' => 'ControllerSite@logoutUser',
    'as'   => 'auth_destroy_path',

]);

Route::post('/bienvenido', [

    'uses' => 'ControllerLogin@renewUser',
    'as'   => 'auth_renew_path',

]);

Route::get('/pass/reset', [

    'uses' => 'ControllerLogin@forgottenPass',
    'as'   => 'auth_reset_path',

]);

//----------------------------------------------------

Route::group(['middleware' => 'auth'], function () {

    Route::get('/site', [

        'uses' => 'ControllerSite@showSite',
        'as'   => 'auth_show_path',

    ]);

    Route::get('SitePersonal', [

        'uses' => 'ControllerLogin@site',
        'as'   => 'auth_login_path',

    ]);

    Route::get('/logoutUser', [

        'uses' => 'ControllerSite@logoutUser',
        'as'   => 'auth_destroy_path',

    ]);

    Route::get('/bienvenido', [

        'uses' => 'ControllerLogin@renewUser',
        'as'   => 'auth_renew_path',

    ]);

    Route::get('/pass/reset', [

        'uses' => 'ControllerLogin@forgottenPass',
        'as'   => 'auth_reset_path',

    ]);

});

Auth::routes();

Route::get('user', 'HomeController@index')->name('user');










