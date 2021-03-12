<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categorias', 'App\Http\Controllers\CategoryController');
Route::get('categoria/{id}', 'App\Http\Controllers\CategoryController@CategotyPost');
Route::apiResource('post', 'App\Http\Controllers\PostController');
Route::get('postcategory/{id}', 'App\Http\Controllers\PostController@CategoryPost');
Route::get('categoriesPost', 'App\Http\Controllers\PostController@CategoriesPosts');
Route::get('categoriasposts', 'App\Http\Controllers\PostController@CategoryPosts');