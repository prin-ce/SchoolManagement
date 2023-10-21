<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*
|
| Route::get('/', function () {
|   return view('welcome');
| });
| 
*/

// Chemin vers la page de connexion
Route::get('/', [AuthController::class, 'login'] );
Route::post('login', [AuthController::class, 'AuthLogin']);


// Chemin vers le tableau de bord super admin
Route::get('supadmin/dashboard', function () {
    return view('supadmin.dashboard');
});

// Chemin vers la liste des administrateurs
Route::get('supadmin/supadmin/list', function () {
    return view('supadmin.supadmin.list');
});
