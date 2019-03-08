<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/','NewsController@showNews');
Route::get('/welcome','MainController@welcome');


Route::get('/category','MainController@showCategory');
Route::post('/category','MainController@addCategory');


Route::get('gallery','NewsController@showGallery');
Route::get('news','NewsController@showNews');


Route::get('contacts','NewsController@showMsg');

///ziņu saglabāšana
Route::post('contacts','NewsController@sendMsg');
//visas ziņas
Route::get('allmsg','NewsController@allMsg');
//ziņu dzēšana
Route::delete('allmsg','NewsController@deleteMsg');
///ziņu labošana
Route::get('editmsg/{id}', 'NewsController@selectCurrentMsg');
Route::put('allmsg', 'NewsController@updateCurrentMsg');