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
    return view('Principal');
});


Route::get('Principal', function(){
    return view('Principal');
});

Route::get('diet', function(){
    return view('diet');
});

Route::get('PrincipalUser', function(){
    return view('PrincipalUser');
});
Auth::routes();

Route::get('/Principal', 'SendEmailController@index');
Route::post('/Principal/send', 'SendEmailController@send');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Principal');
