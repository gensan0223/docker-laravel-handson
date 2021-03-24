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
//     logger('welcome route.');
//     return view('welcome');
// });

// Route::get('hello',function(){
//     echo 'Hello World';
// });

Route::get('hello', 'PostsController@hello');

Route::get('/', 'PostsController@index');

Route::get('post/createForm','PostsController@createForm');

Route::post('post/create','PostsController@create');

Route::get('post/{id}/update-form', "PostsController@updateForm");

Route::get('post/{id}/delete', "PostsController@delete");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', 'PostsController@welcome');