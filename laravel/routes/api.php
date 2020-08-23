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

Route::prefix('auth')->group(function (){
    Route::get('init', 'AppController@init');
    Route::post('login', 'AppController@login');
    Route::post('register', 'AppController@register');
    Route::post('logout', 'AppController@logout');
    
});
// Route::post('register', 'Auth\RegisterController@register');
//     Route::post('login', 'Auth\LoginController@authenticate');
//     Route::get('open', 'DataController@open');


//     Route::post('category', 'CategoryController@store');
//     Route::get('category/show', 'CategoryController@index');

//     Route::post('post', 'PostController@store');
//     Route::get('post/show', 'PostController@index');

//     Route::post('article', 'ArticleController@store');
//     Route::get('article/show', 'PostController@index');

    
//     Route::put('user/update', 'HomeController@update_avatar');


//     Route::group(['middleware' => ['jwt.verify']], function() {
//         Route::get('user', 'UserController@getAuthenticatedUser');

//         Route::get('closed', 'DataController@closed');
        
//     });