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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('subject', 'SubjectController');

Route::resource('logfile', 'LogFileController');

Route::resource('contentfile', 'ContentFileController');

Route::resource('descriptionfile', 'DescriptionFileController');

Route::resource('section', 'SectionController');

Route::get('index', function () {
    return view('index');
});

Route::get('generatequiz', function () {
    return view('generateQuiz');
});
Route::get('generatequestion', function () {
    return view('generateQuestion');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
