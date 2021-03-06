<?php

use App\Http\Controllers\PostsController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');
//
//Route::get('/about', function () {
//    return "This is about me";
//});
//
//Route::get('/contact', function () {
//    return "This is my contact";
//});
//
//Route::get('/post/{id}', function ($id) {
//    return "This is the post " . $id;
//});
//
//Route::get('/admin/post/example', array('as' => 'admin.home', function () {
//    $url = route('admin.home');
//    return "This is the url $url";
//}));