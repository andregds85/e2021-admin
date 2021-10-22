<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\soudohospital;
use App\Http\Controllers\MapasController;
use App\Http\Controllers\SairController;

use App\Http\Controllers\MacroController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\macro;



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('sair', SairController::class);
    Route::resource('macros', MacroController::class);
    Route::resource('manual', ManualController::class);
    Route::resource('mapas', MapasController::class);
    Route::resource('macro', macro::class);

    /* url chamando um methodo do Controller 
    Route::get('pacienteMapa', 'App\Http\Controllers\mapasRegController@abc');
    */
   
    Route::get('import_exportpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@importExport');
    Route::post('importpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@import');
    Route::get('exportpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@export');
    Route::get('import_export', 'App\Http\Controllers\Import_Export_Controller@index');
  
    /*
    Route::post('import', 'App\Http\Controllers\Import_Export_Controller@import'); */
  

    Route::get('export', 'App\Http\Controllers\Import_Export_Controller@export');



});








