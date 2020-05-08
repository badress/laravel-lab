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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $posts = DB::table('posts')->get();
    return view('home')->with('posts', $posts);
});
Route::get('/contact', function () {
    $posts = DB::table('posts')->get();
    return view('contact')->with('posts', $posts);
});
Route::get('/about', function () {
    $posts = DB::table('posts')->get();
    return view('about')->with('posts', $posts);
});
