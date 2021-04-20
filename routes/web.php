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
use App\Http\Controllers\IncidentController;
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




Route::get('/reportar', [IncidentController::class, 'create'])->middleware(['auth']);
Route::post('/reportar', [IncidentController::class, 'store'])->middleware(['auth']);

Route::get('/ver/{id}', [IncidentController::class, 'show'])->middleware(['auth']);

Route::get('/incidencia/{id}/editar', [IncidentController::class, 'edit'])->middleware(['auth']);
Route::post('/incidencia/{id}/editar', [IncidentController::class, 'update'])->middleware(['auth']);


Route::get('/incidencia/{id}/atender', [IncidentController::class, 'take'])->middleware(['auth']);
Route::get('/incidencia/{id}/resolver', [IncidentController::class, 'solve'])->middleware(['auth']);
Route::get('/incidencia/{id}/abrir', [IncidentController::class, 'open'])->middleware(['auth']);

Route::get('/incidencia/{id}/derivar', [IncidentController::class, 'nextlevel'])->middleware(['auth']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/seleccionar/proyecto/{id}', [DashboardController::class,'selectProject']);

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
