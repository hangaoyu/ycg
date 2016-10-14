<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    return view('main.home');
});
Route::get('/about', function () {
    return view('main.about');
});
Route::get('/entrepreneur', function () {
    return view('main.entrepreneur');
});
Route::get('/investor', function () {
    return view('main.investor');
});
Route::get('/investor_hospital_detail', function () {
    return view('main.investor_hospital_detail');
});
Route::get('/investor_training_detail', function () {
    return view('main.investor_training_detail');
});
Route::get('/investor_bussiness_detail', function () {
    return view('main.investor_bussiness_detail');
});
Route::get('/activity', function () {
    return view('main.activity');
});
Route::get('/activity_detail', function () {
    return view('main.activity_detail');
});
Route::get('/interact', function () {
    return view('main.interact');
});

Route::get('/welfare', function () {
    return view('main.welfare');
});
Route::get('/welfare_detail', function () {
    return view('main.welfare_detail');
});
Route::get('/join', function () {
    return view('main.join');
});

Route::get('/project', function () {
    return view('main.project');
});
Route::get('/more_project', function () {
    return view('main.more_project');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
