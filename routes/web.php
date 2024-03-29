<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PompeController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\ConsommationController;

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
    return redirect()->to("/login");
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>['auth'],
    // 'middleware'=>['auth',"permission_login"],
    // 'prefix' => 'prois',
], function(){
    Route::group([
        'middleware'=>["password_expired"],
    ], function(){
        Route::get('/home', 'Controller@index');
        Route::get('/invest', 'ConsommationController@investigation');
        Route::resources([
            'poste'=>PosteController::class,
            'vehicule'=>VehiculeController::class,
            'societe'=>SocieteController::class,
            'affectation'=>AffectationController::class,
            'consommation'=>ConsommationController::class,
            'pompe'=>PompeController::class,
        ]);
       
    });
    Route::get('password/expired', 'Controller@expired')->name('user.expired');
   
});
