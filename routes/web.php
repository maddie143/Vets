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
Route::post('/saveChanges',[
    'uses' => 'UserController@saveChanges',
    'as'   => 'saveChanges'
]);
Route::post('/saveChangesVet',[
    'uses' => 'UserController@saveChangesVet',
    'as'   => 'saveChangesVet'
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

Route::get('/vet/{id}',[
    'uses' => 'VetController@showVet',
    'as'   => 'show_vet'
]);
Route::post('/add-appointment',[
   'uses' => 'UserController@processAppointment',
   'as'   => 'process_appointment'
]);
Route::get('/confirm-appointment/{id}', [
    'uses' => 'UserController@confirmAppointment',
    'as'   => 'confirm_appointment'
]);

Route::get('/cancel-appointment/{id}', [
    'uses' => 'UserController@cancelAppointment',
    'as'   => 'cancel_appointment'
]);
Route::get('/logout',[
    'uses' => 'UserController@logout',
    'as'   => 'user_logout'
]);
Route::get('/show-services',[
    'uses' => 'ServiceController@showService',
    'as'   => 'show_service'
]);
Route::post('/add-service',[
    'uses' => 'ServiceController@addService',
    'as'   => 'add_service'
]);
Route::get('/delete-service/{id}',[
    'uses' => 'UserController@deleteService',
    'as'   => 'delete_service'
]);

Route::post('/modify-service/{id}',[
    'uses' => 'UserController@modifyService',
    'as'   => 'modify_service'
]);

Route::post('/save-emergency/{id}',[
    'uses' => 'UserController@saveEmergency',
    'as'   => 'save_emergency'
]);
Route::get('/emergency',[
    'uses' => 'VetController@showEmergency',
    'as'   => 'show_emergency'
]);

Route::get('/add-animal',[
   'uses' => 'UserController@addAnimalPage',
   'as'   => 'add_animal'
]);
Route::post('/add-animal',[
   'uses' => 'UserController@addAnimalProcess',
   'as'   => 'add_animal_process'
]);
Route::get('/delete-animal/{i}',[
    'uses' => 'UserController@deleteAnimal',
    'as'   => 'delete_animal'
]);

