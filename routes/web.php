<?php

use App\Http\Controllers\Auth\PasswordController;
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

        Route::get('/admin/publikasi/slide', function () {
            return view('backend.livewire.slide');
        })->name("admin.publikasi.slide");

        Route::get('/admin/publikasi/page', function () {
            return view('backend.livewire.page');
        })->name("admin.publikasi.page");

        Route::get('/admin/profile', function () {
            return view('backend.livewire.profile');
        })->name("admin.profile");

        Route::get('/admin/usersite', function () {
            return view('backend.livewire.usersite');
        })->name("admin.usersite");

        Route::post('/admin/password/change', [PasswordController::class, 'changePassword'])->name('admin.password.update');
    });


    //role: User
    Route::middleware(['auth', 'role:User'])->group(function () {
        Route::get('/user/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('user.dashboard');

        Route::get('/user/publikasi/post', function () {
            return view('backend.livewire.post');
        })->name("user.publikasi.post");

        Route::get('/user/publikasi/slide', function () {
            return view('backend.livewire.slide');
        })->name("user.publikasi.slide");

        Route::get('/user/publikasi/page', function () {
            return view('backend.livewire.page');
        })->name("user.publikasi.page");

        Route::get('/user/profile', function () {
            return view('backend.livewire.profile');
        })->name("user.profile");

        Route::post('/user/password/change', [PasswordController::class, 'changePassword'])->name('user.password.update');
    });

// });


