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

Route::get('/', [
    'uses' => 'Controller@showHomePage',
    'as'   => 'show_homepage'
]);

Route::get('/login', [
    'uses' => 'UserController@showLoginPage',
    'as'   => 'show_login'
]);

Route::post('/login',[
    'uses' => 'UserController@login',
    'as'   => 'process_login'
]);

Route::get('/register', [
    'uses' => 'UserController@showRegisterPage',
    'as'   => 'show_register'
]);
Route::post('/register', [
    'uses' => 'UserController@register',
    'as'   => 'process_register'
]);
Route::get('/search', [
    'uses' => 'VetController@showAllVetPage',
    'as'   => 'show_all_vet'
]);

Route::get('/services', [
    'uses' => 'ServiceController@showAllServicesPage',
    'as'   => 'show_all_service'
]);
Route::get('/dashboard',[
    'uses' => 'UserController@showDashbord',
    'as'   => 'show_dashbord',
    'middleware' => [\App\Http\Middleware\CheckAuth::class]
]);

Route::get('/appointment', [
    'uses' => 'ServiceController@showAddAppointmentPage',
    'as'   => 'add_appointment'
]);

Route::get('/vet',[
    'uses' => 'VetController@showVet',
    'as'   => 'show_vet'
]);