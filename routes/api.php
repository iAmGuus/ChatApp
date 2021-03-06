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

Route::post('/user', 'UserController@findUser');
Route::put('/user/{id}', 'UserController@updateUser');
Route::post('/chat/upload', 'FileUploadController@handleUpload');
