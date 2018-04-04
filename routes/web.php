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

// ---------------  Articles -------------------------------------------------------------------

Route::get('/', "ArticlesController@index");
Route::get('/articles/create', "ArticlesController@create");
Route::get('/articles/{article}', "ArticlesController@show"); //->middleware('mymiddle');
Route::post('/articles/', 'ArticlesController@store');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::patch('/articles/{article}', "ArticlesController@update");
Route::delete('/articles/{article}', "ArticlesController@destroy");

// ---------------  ArtGroups  ------------ Article groups --------------------------------------

Route::get('/ArtGroups', "ArtGroupsController@index");
Route::get('/ArtGroups/create', "ArtGroupsController@create");
Route::get('/ArtGroups/{artGroup}/edit', "ArtGroupsController@edit");
Route::post('/ArtGroups', "ArtGroupsController@store");
Route::patch('/ArtGroups/{artGroup}', "ArtGroupsController@update");
Route::delete('/ArtGroups/{artGroup}', "ArtGroupsController@destroy");

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