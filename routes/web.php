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

Route::get('/', "ArticlesController@index");
Route::get('/articles/create', "ArticlesController@create");
Route::get('/articles/{article}', "ArticlesController@show");
Route::post('/articles/', 'ArticlesController@store');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::patch('/articles/{article}', "ArticlesController@update");
Route::delete('/articles/{article}', "ArticlesController@destroy");

/*
 *
 * GET /
 * GET /create
 * POST /
 * GET /{id}/edit
 * PATCH /{id}
 * GET /{id}
 * DELETE /{id}
 *
 *
 */