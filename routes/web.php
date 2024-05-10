<?php

use Illuminate\Support\Facades\Route;

//route portal
Route::name('portal.')->group(function(){

    Route::get('/', function () {
        return view('frontend.portal.index');
    })->name("index");

});

//route subportal
Route::name('subportal.')->group(function(){

    Route::get('/skpd', function () {
        return view('frontend.subportal.index');
    })->name("index");

    Route::get('/skpd/blog/', function () {
        return view('frontend.subportal.blog');
    })->name("blog");

    Route::get('/skpd/post/1', function () {
        return view('frontend.subportal.singleblog');
    })->name("showpost");

    Route::get('/skpd/page/profil', function () {
        return view('frontend.subportal.page');
    })->name("showpage");

});

//route admin
Route::name('admin.')->group(function(){

    Route::get('/login', function () {
        return view('backend.login');
    })->name("login");

    Route::get('/admin', function () {
        return view('backend.dashboard');
    })->name("dashboard");

});

