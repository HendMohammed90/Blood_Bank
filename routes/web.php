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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('doner.index');
});

Route::get('/donerRegs', 'DonerRegestration@index');
Route::post('/donerRegs' , 'DonerRegestration@create' );


Route::get('/donerReq', 'DonerRequest@index');
Route::post('/donerReq', 'DonerRequest@create');



Route::get('/learn',function () {
    return view('doner.learn');
} );

Route::get('/contact', 'ContactUsFormController@index');
Route::post('/contact' , 'ContactUsFormController@ContactUsForm')->name('contact.store');


//Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



