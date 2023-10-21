<?php

use Illuminate\Support\Facades\Route;

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

// Chemin vers le tableau de bord admin
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

// Chemin vers la liste des administrateurs
Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});
