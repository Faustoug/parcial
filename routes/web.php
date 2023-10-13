<?php

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
    return view('crub.create');
});

/*Route::middleware([
    'auth:sanctum','verified',])->get('/dash', function () {
        return view('dash.index');
    })->name('dash');
*/
Route::get('/dash','App\Http\Controllers\PersonaController@index');
Route::get('/dash/crub', function () {
    return view('crub.index');
});
Route::get('/dash/crub/create', function () {
    return view('crub.create');
});
