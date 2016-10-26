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

Route::get('/', 'MainController@index');
Route::get('/project/{project_id}', 'MainController@show_project');
Route::get('/finance/{finance_id}', 'MainController@show_finance');
Route::get('about', 'MainController@about');
Route::get('investor', 'MainController@investor');

Route::get('/weibo', 'UserController@weibo');
Route::get('/weibo_back', 'UserController@weibo_back');

Route::get('/entrepreneur', function () {
    return view('main.entrepreneur');
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
Route::get('/test', function () {
    $url="http://www.ebrun.com/qpd/62.html";
    $fcontents=file_get_contents($url);
    return $fcontents;
});

Route::get('/more_project', function () {
    return view('main.more_project');
});



Route::get('/home', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //孵化项目
    Route::resource('project', 'ProjectController');
    Route::post('/project/logo', 'ProjectController@changelogo');
    //项目基本信息
    Route::get('/project_base/{project_id}', 'ProjectController@base');
    Route::post('/change_project_base/{project_id}', 'ProjectController@changebase');
    //项目股东
    Route::get('/project_holder/{project_id}', 'ProjectController@holder');
    Route::post('/add_project_holder', 'ProjectController@addholder');
    Route::post('/edit_project_holder', 'ProjectController@editholder');
    Route::post('/delete_project_holder', 'ProjectController@deleteholder');

    //项目动态
    Route::get('/project_dynamic/{project_id}', 'ProjectController@dynamic');
    Route::post('/add_project_dynamic', 'ProjectController@add_dynamic');
    Route::post('/delete_project_dynamic', 'ProjectController@deletedynamic');
    Route::post('/edit_project_dynamic', 'ProjectController@editdynamic');
    //项目历程
    Route::get('/project_process/{project_id}', 'ProjectController@process');
    Route::post('/add_project_process', 'ProjectController@add_process');
    Route::post('/delete_project_process', 'ProjectController@deleteprocess');
    Route::post('/edit_project_process', 'ProjectController@editprocess');
    //轮播图
    Route::get('/carousel','CarouselController@category');
    Route::get('/get_file_list/{type_id}','CarouselController@getfilelist');
    Route::get('/get_type_list','CarouselController@get_typelist');
    Route::post('/add_carousel','CarouselController@addfile');
    Route::post('/check_carousel','CarouselController@check_carousel');
    Route::post('/delete_carousel','CarouselController@delete_carousel');

    Route::get('/test', function () {
        return view('admin.test');
    });
    //markdowm上传图片
    Route::post('post/upload','PostController@upload');
    Route::post('post/upload_img','PostController@upload_img');
    //导师信息
    Route::resource('teacher', 'TeacherController');
    Route::post('/teacher/avatar', 'TeacherController@change_avatar');
    //创业空间
    Route::resource('area', 'AreaController');
    Route::post('/area/avatar', 'AreaController@change_avatar');
    //大事记
    Route::resource('event', 'EventController');
    Route::post('/event/avatar', 'EventController@change_avatar');
    // 基本信息
    Route::resource('about', 'AboutController');
    // 投资人
    Route::resource('investor', 'InvestorController');
    //爬虫
    Route::get('/crawl','CrawlController@crawl');

});
Route::post('/discussions', function () {
    dd('aa');
});
Route::get('/logout', 'Auth\LoginController@logout');


