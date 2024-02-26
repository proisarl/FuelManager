<?php

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\ConsommationController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\VehiculeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.welcome');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>['auth'],
    // 'prefix' => 'prois',
], function(){
    Route::get('/home', 'Controller@index');
    Route::resources([
        'poste'=>PosteController::class,
        'vehicule'=>VehiculeController::class,
        'societe'=>SocieteController::class,
        'affectation'=>AffectationController::class,
        'consommation'=>ConsommationController::class,
    ]);
});
