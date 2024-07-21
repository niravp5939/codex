<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('password/{psd}', function ($psd) {
    echo Hash::make($psd);
});

Route::get('/', [WebsiteController::class, 'showWebsite'])->name('home');

// About Section ------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [WebsiteController::class, 'about'])->name('about');
});

// Resume Section ------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'my-resume'], function () {
    Route::get('/', [WebsiteController::class, 'resume'])->name('resume');
});

// Services Section ------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'services'], function () {
    Route::get('/', [WebsiteController::class, 'services'])->name('services');
    Route::get('web-development', [WebsiteController::class, 'webDev'])->name('services.webdev');
    Route::get('web-designing', [WebsiteController::class, 'webDes'])->name('services.webdes');
    Route::get('devops-offering', [WebsiteController::class, 'devOps'])->name('services.devops');
});

// Projects Section ------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'projects'], function () {
    Route::get('/', [WebsiteController::class, 'projects'])->name('projects');
    Route::get('hrms', [WebsiteController::class, 'hrms'])->name('projects.hrms');
    Route::get('e-commerce', [WebsiteController::class, 'ecom'])->name('projects.ecom');
});

// Contact Section ------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [WebsiteController::class, 'contact'])->name('contact');
    Route::post('add', [UserController::class, 'addUser'])->name('contact.add');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [HomeController::class, 'index'])->name('adminpanel.index');

    // User Section ------------------------------------------------------------------------------------------------------------------
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'listUser'])->name('user.list');
    });

});

Auth::routes(['register' => false]);