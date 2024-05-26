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
    Route::get('/{slug}/page/{slugpage}', [App\Http\Controllers\SubPortalController::class, 'showpage'])->name('showpage');


    Route::get('/{slug}/page/profil', function () {
        return view('frontend.subportal.page');
    })->name("pageprofil");

});

//route admin
// Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::name('admin.')->group(function(){

        Route::get('/admin/login', function () {
            return view('backend.login');
        })->name("login");

    });

    //Autenticate
    // Route::group(['middleware' => 'auth'], function () {
        Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
        Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    // });
   


    //role: Admin
    Route::middleware(['auth', 'role:Admin'])->group(function () {
    
        Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/admin/publikasi/category', function () {
            return view('backend.livewire.postcategory');
        })->name("admin.publikasi.category");

        Route::get('/admin/publikasi/post', function () {
            return view('backend.livewire.post');
        })->name("admin.publikasi.post");

        Route::get('/admin/profile', function () {
            return view('backend.livewire.profile');
        })->name("admin.profile");
    });


    //role: User
    Route::middleware(['auth', 'role:User'])->group(function () {
        Route::get('/user/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('user.dashboard');

        Route::get('/user/publikasi/post', function () {
            return view('backend.livewire.post');
        })->name("user.publikasi.post");

        Route::get('/user/profile', function () {
            return view('backend.livewire.profile');
        })->name("user.profile");
    });

// });


