<?php

use Illuminate\Support\Facades\Route;

//route portal
Route::name('portal.')->group(function(){

    Route::get('/', [App\Http\Controllers\PortalController::class, 'index'])->name('index');

});

//route subportal
Route::name('subportal.')->group(function(){
    Route::get('/{slug}', [App\Http\Controllers\SubPortalController::class, 'index'])->name('index');

    Route::get('/skpd', function () {
        return view('frontend.subportal.index');
    })->name("index2");

    Route::get('/{slug}/blog', [App\Http\Controllers\SubPortalController::class, 'blog'])->name('blog');
    Route::get('/{slug}/blog/{slugpost}', [App\Http\Controllers\SubPortalController::class, 'showpost'])->name('showpost');



    Route::get('/skpd/post/1', function () {
        return view('frontend.subportal.singleblog');
    })->name("showposst");

    Route::get('/skpd/page/profil', function () {
        return view('frontend.subportal.page');
    })->name("showpage");

});

//route admin
// Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::name('admin.')->group(function(){

        Route::get('/admin/login', function () {
            return view('backend.login');
        })->name("login");

        Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('/admin/publikasi/category', function () {
            return view('backend.livewire.postcategory');
        })->name("publikasi.category");


    });

// });


