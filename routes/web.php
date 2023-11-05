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

// Route::get('/', function () {
//     return ['message' => 'API CALLED NO INVALID ROUTE OR NO METHOD'];
// });

Route::get('/home', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/','App\Http\Controllers\PagesController@_404_');

Route::get('/user/{id}', function ($id) {
    return [
        'message' => 'User id called',
        'id'=>$id
            ];
});

require __DIR__.'/auth.php';
