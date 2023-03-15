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

Route::get("/firstpage", function () {
    return "<h1>This is my first Laravel.</h1>";
});

Route::get("/page1", function () {
    return "<h1>This is Laravel page 1.</h1>";
});

Route::get("/page2", function () {
    return "<h1>This is Laravel page 2.</h1>";
});

Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id}555</h1>";
});

Route::get("/blog/{id}/edit", function ($id) {
    return "<h1>This is blog page : {$id} for edit</h1>";
});

Route::get("/category/{x?}", function ($x = "apple") {
    return "<h1>This is category page : {$x}</h1>";
});

Route::get("/order/issue", function () {
    return "<h1>This is order form page : " . request("username") . "</h1>";
});

Route::get('/salecustomer', function () {
    return view('/customer/index');
});

Route::get('/greeting', function () {
    $name = "Com-Sci";
    $lastname = "IT";
    return view('greeting', compact('name', 'lastname'));
});

Route::get('/showpics', function () {
    $pic1 = "https://images.pexels.com/photos/325044/pexels-photo-325044.jpeg";
    $pic2 = "https://images.pexels.com/photos/1485894/pexels-photo-1485894.jpeg";
    $pic3 = "https://images.pexels.com/photos/10854955/pexels-photo-10854955.jpeg";
    $pic4 = "https://images.pexels.com/photos/1367192/pexels-photo-1367192.jpeg";
    $pic5 = "https://images.pexels.com/photos/1229042/pexels-photo-1229042.jpeg";

    return view("/showpics/index", compact("pic1", "pic2", "pic3", "pic4", "pic5"));
});

Route::get('/showpics/detail/{name}', function($name){
    $url = "";
    $pic1 = "https://images.pexels.com/photos/325044/pexels-photo-325044.jpeg";
    $pic2 = "https://images.pexels.com/photos/1485894/pexels-photo-1485894.jpeg";
    $pic3 = "https://images.pexels.com/photos/10854955/pexels-photo-10854955.jpeg";
    $pic4 = "https://images.pexels.com/photos/1367192/pexels-photo-1367192.jpeg";
    $pic5 = "https://images.pexels.com/photos/1229042/pexels-photo-1229042.jpeg";

    if($name == "fish")
    {
        $url = $pic1;
    }
    else if($name == "sunset")
    {
        $url = $pic2;
    }
    else if($name == "city")
    {
        $url = $pic3;
    }
    else if($name == "forest")
    {
        $url = $pic4;
    }
    else if($name == "star")
    {
        $url = $pic5;
    }

    return view('/showpics/detail', compact("url", "name"));
});

Route::get('/hitsongs', function(){
    return view('hitsongs');
});

Route::get('/hitgames', function(){
    return view('hitgames');
});

Route::get('/showcomponent', function(){
    return view('showcomponent');
});

Route::get('/test', function(){
    return view('test');
});
