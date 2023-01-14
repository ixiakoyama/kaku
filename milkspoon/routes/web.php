<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoplistController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SaiyouController;
use App\Http\Controllers\FlavorController;
use App\Http\Controllers\IbentoController;
use App\Http\Controllers\JigyoController;
use App\Http\Controllers\ContactsController;
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
Route::get('/toiawase', function () {
    return view('/toiawase');
});


Route::get('/tempo', [ShoplistController::class, 'show']);
Route::get('/companychild', [CompanyController::class, 'show']);
Route::get('/saiyou', [SaiyouController::class, 'show']);
Route::get('/flavor', [FlavorController::class, 'show']);
Route::get('/ibento', [IbentoController::class, 'show']);
Route::get('/jigyounaiyou', [JigyoController::class, 'show']);
Route::get('/toiawase', [ContactsController::class, 'show']);


// お問い合わせ入力ページ
Route::get('/toiawase', 'App\Http\Controllers\ContactsController@index')->name('contact');

// 確認ページ
Route::post('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('confirm');

// 完了ページ
Route::get('/complete', 'App\Http\Controllers\ContactsController@complete')->name('complete');

// DB挿入、メール送信
Route::post('/process', 'App\Http\Controllers\ContactsController@process')->name('process');



