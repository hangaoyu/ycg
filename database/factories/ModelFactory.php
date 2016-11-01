<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
//孵化项目
$factory->define(App\Project::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->name,
        'desrc' => $faker->sentence,
        'register_id' => $faker->sentence,
        'person' => $faker->sentence,
        'create_at' => $faker->sentence,
        'type' => $faker->sentence,
        'address' => $faker->sentence,
        'capital' => $faker->sentence,
        'state' => $faker->sentence,
        'body' => $faker->paragraph,
        'logo' => $faker->imageUrl(256, 256),

    ];
});
$factory->define(App\Project_Dynamic::class, function (Faker\Generator $faker) {

    $project_ids = \App\Project::pluck('id')->toArray();
    return [
        'dynamic_type' => $faker->word,
        'dynamic_desrc' => $faker->sentence,
        'project_id' => $faker->randomElement($project_ids),
    ];
});
$factory->define(App\Project_Process::class, function (Faker\Generator $faker) {

    $project_ids = \App\Project::pluck('id')->toArray();
    return [
        'money' => $faker->word,
        'state' => $faker->word,
        'investor' => $faker->word,
        'investe_time' => $faker->word,
        'project_id' => $faker->randomElement($project_ids),
    ];
});
$factory->define(App\Project_Holder::class, function (Faker\Generator $faker) {

    $project_ids = \App\Project::pluck('id')->toArray();
    return [
        'holder' => $faker->sentence,
        'project_id' => $faker->randomElement($project_ids),
    ];
});
//板块
//$factory->define(App\Type::class, function (Faker\Generator $faker) {
//
//    return [
//        'name' =>  $faker->word,

//
//    ];
//});

//轮播图
$factory->define(App\Imgfile::class, function (Faker\Generator $faker) {

    $type_ids = \App\Type::pluck('id')->toArray();
    return [
        'type_id' => $faker->randomElement($type_ids),
        'imgsrc' => $faker->imageUrl(1000, 500),
        'is_check' => $faker->boolean(),
        'desr' => $faker->sentence,
    ];
});
//导师
$factory->define(App\Teacher::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->word,
        'avatar' => $faker->imageUrl(256, 256),
        'job' => $faker->word,
        'desrc' => $faker->paragraph,
        'body' => $faker->paragraph,
        'other' => $faker->word,
    ];
});
//创业空间
//导师
$factory->define(App\Area::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->word,
        'imgsrc' => $faker->imageUrl(256, 256),
        'address' => $faker->sentence,

    ];
});
//关于我们
$factory->define(App\About::class, function (Faker\Generator $faker) {


    return [
        'banner' => $faker->imageUrl(256, 256),
        'production' => $faker->paragraph,
        'healthy' => $faker->paragraph,
        'body' => $faker->paragraph,
        'address' => $faker->sentence,
        'phone' => $faker->sentence,
        'email' => $faker->sentence,
        'postcode' => $faker->sentence,

    ];
});
//大事记
$factory->define(App\Timeline::class, function (Faker\Generator $faker) {


    return [
        'imgsrc' => $faker->imageUrl(256, 256),
        'time' => $faker->word,
        'detail' => $faker->paragraph,
        'body' => $faker->paragraph,
    ];
});
//投资人
$factory->define(App\Investor::class, function (Faker\Generator $faker) {


    return [
        'title' =>  $faker->sentence,
        'subtitle' => $faker->sentence,
        'other' => $faker->sentence,
    ];
});
//创业者
$factory->define(App\Entrepreneur::class, function (Faker\Generator $faker) {


    return [
        'title' =>  $faker->sentence,
        'subtitle' => $faker->sentence,
        'en_title' => $faker->sentence,
        'apply_text' => $faker->paragraph,
        'desrc' => $faker->paragraph,
        'other' => $faker->paragraph,
    ];
});
//基金
$factory->define(App\Fund::class, function (Faker\Generator $faker) {

    return [
        'type' =>  $faker->word,
        'name' => $faker->word,
        'desrc' => $faker->sentence,
        'explain' => $faker->paragraph,

    ];
});

//融资信息
$factory->define(App\Dynamic::class, function (Faker\Generator $faker) {

    return [
        'time' =>  $faker->word,
        'title' => $faker->sentence,
        'subtitle' => $faker->word,
    ];
});

//公益活动
$factory->define(App\WelfareItem::class, function (Faker\Generator $faker) {

    $types = \App\WelfareType::pluck('id')->toArray();
    return [
        'title'=>$faker->sentence,
        'at_where'=>$faker->word,
        'time'=>$faker->word,
        'type_id' =>  $faker->randomElement($types),
        'img_src' => $faker->imageUrl(256, 256),
        'desrc' => $faker->paragraph,
        'address' => $faker->paragraph,
        'qq'=>$faker->sentence,
        'wx'=>$faker->sentence,
        'sina'=>$faker->sentence,
    ];
});

//创业活动
$factory->define(App\ActivityItem::class, function (Faker\Generator $faker) {

    $types = \App\ActivityType::pluck('id')->toArray();
    return [
        'type_id' =>  $faker->randomElement($types),
        'img_src' => $faker->imageUrl(256, 256),
        'big_img_src' => $faker->imageUrl(256, 256),
        'title' => $faker->paragraph,
        'address' => $faker->paragraph,
        'time'=>$faker->sentence,
        'desrc'=>$faker->sentence,
        'process'=>$faker->sentence,
        'contact'=>$faker->sentence,
    ];
});



