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
Route::get('/create', "ArticlesController@create");
Route::get('/{article}', "ArticlesController@show");

Route::post('/', 'ArticleController@create');

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