<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoplistController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SaiyouController;
use App\Http\Controllers\FlavorController;
use App\Http\Controllers\IbentoController;
use App\Http\Controllers\JigyoController;
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
    return view('index');
});
Route::get('/parts/tempo', function () {
    return view('tempo');
});
Route::get('/parts/companychild', function () {
    return view('/companychild');
});
Route::get('/parts/flavor', function () {
    return view('/flavor');
});
Route::get('/parts/ibento', function () {
    return view('/ibento');
});
Route::get('/parts/jigyounaiyou', function () {
    return view('/jigyounaiyou');
});

Route::get('/tempo', [ShoplistController::class, 'show']);
Route::get('/companychild', [CompanyController::class, 'show']);
Route::get('/saiyou', [SaiyouController::class, 'show']);
Route::get('/flavor', [FlavorController::class, 'show']);
Route::get('/ibento', [IbentoController::class, 'show']);
Route::get('/jigyounaiyou', [JigyoController::class, 'show']);
