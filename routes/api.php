<?php

use Illuminate\Http\Request;

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


Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@delete');


Route::get('questions', 'QuestionController@index');
Route::get('questions/{question}', 'QuestionController@show');
Route::post('questions', 'QuestionController@store');
Route::put('questions/{question}', 'QuestionController@update');
Route::delete('questions/{question}', 'QuestionController@delete');

Route::get('test_templates', 'TestTemplateController@index');
Route::get('test_templates/{testTemplate}', 'TestTemplateController@show');
Route::post('test_templates', 'TestTemplateController@store');
Route::put('test_templates/{testTemplate}', 'TestTemplateController@update');
Route::delete('test_templates/{testTemplate}', 'TestTemplateController@delete');