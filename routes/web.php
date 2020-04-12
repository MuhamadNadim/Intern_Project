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

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');

Route::resource('posts','PostsController');

/*
Deleted Unusable Code One:
Route::get('/users/{id}/{age}', function ($id,$age) {
    return 'This is user: '.$id'. He is '.$age' years old.';
});

Deleted Unusable Code Two:
Route::get('/', 'PagesController@test');

Deleted Unusable Code Three:
Route::get('/test', function () {
    return view('page_test.test');
});

Deleted Unusable Code Four:
Route::get('/index', function () {
    return view('page_test.index');
});

Deleted Unusable Code Five:
Route::resource('posts','PostsController');
*/

/*
Usable but Kept Code One:
Route::get('/1', function () {
    return '<h2>Hello Nadim!</h2>';
});

Usable but Kept Code Two:
Route::get('/u/{name}/{id}', function ($name,$id) {
    return "This is user by the name: ".$name.". The user's numerical ID is ".$id.".";
});

Usable but Kept Code Three:
Route::get('/bloglist', function () {
    return view('bloglist');
});

Usable but kept Code Four:
Route::get('', function () {
    return view('home');
});

Usable but kept Code Five:
Route::get('/about', function () {
    return view('about');
});

Usable but kept Code Six:
Route::get('/posts', function () {
    return view('posts.home');
});

Usable but kept Code Seven:
Route::get('/contact', function () {
    return view('contact');
});
*/
