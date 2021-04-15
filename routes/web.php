<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\ProjectUserController;
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




Route::get('/reportar', [DashboardController::class, 'getReport'])->middleware('auth');
Route::post('/reportar', [DashboardController::class, 'postReport'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::group(['Middleware'=>'auth','namespace'=>'Admin'], function(){
//user
    Route::get('/usuarios',[UserController::class,'index']);
    Route::post('/usuarios',[UserController::class,'store']);
    Route::get('/usuario/{id}',[UserController::class,'edit']);
    Route::post('/usuario/{id}',[UserController::class,'update']);
    Route::get('/usuario/{id}/eliminar',[UserController::class,'delete']);

//project
    Route::get('/proyectos',[ProjectController::class,'index']);
    Route::post('/proyectos',[ProjectController::class,'store']);
    Route::get('/proyecto/{id}',[ProjectController::class,'edit']);
    Route::post('/proyecto/{id}',[ProjectController::class,'update']);
    Route::get('/proyecto/{id}/eliminar',[ProjectController::class,'delete']);
    Route::get('/proyecto/{id}/restaurar',[ProjectController::class,'restore']);

//category
Route::post('/categorias',[CategoryController::class,'store']);
Route::post('/categoria/editar',[CategoryController::class,'update']);
Route::get('/categoria/{id}/eliminar',[CategoryController::class,'delete']);
//level
Route::post('/niveles',[LevelController::class,'store']);
Route::post('/nivel/editar',[LevelController::class,'update']);
Route::get('/nivel/{id}/eliminar',[LevelController::class,'delete']);
//project-user

Route::post('/proyecto-usuario',[ProjectUserController::class,'store']);
Route::get('/proyecto-usuario/{id}/eliminar',[ProjectUserController::class,'delete']);

    Route::get('/config',[ConfigController::class,'index']);

});



require __DIR__.'/auth.php';
