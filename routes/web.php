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

Route::get('/', 'GameController@_homepage');
Route::get('/category/{rqUrl?}','GameController@_category');
Route::get('/listgame-download','GameController@_listAllGames');
Route::get('/game/{rqUrl?}','GameController@_viewGame');
Route::get('/mod/{rqUrl?}','GameController@_category');
Route::get('/download/{rqUrl?}','GameController@_category');
