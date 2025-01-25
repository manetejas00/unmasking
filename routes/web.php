<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('index');

//  Pages
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/authentication/log-in', 'signIn')->name('signIn');
        Route::get('/authentication/reset-password', 'resetPassword')->name('resetPassword');
        Route::get('/authentication/sign-up', 'signUp')->name('signUp');
        Route::get('/projects/portfolio-1', 'portfolio01')->name('portfolio01');
        Route::get('/projects/portfolio-2', 'portfolio02')->name('portfolio02');
        Route::get('/projects/single-portfolio', 'singlePortfolio')->name('singlePortfolio');
        Route::get('/services/service', 'service')->name('service');
        Route::get('/services/single-service', 'singleService')->name('singleService');
        Route::get('/team/team', 'team')->name('team');
        Route::get('/team/single-team', 'singleTeam')->name('singleTeam');
        Route::get('/utility/error-page', 'errorPage')->name('errorPage');
        Route::get('/utility/coming-soon', 'comingSoon')->name('comingSoon');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/pricing', 'pricing')->name('pricing');
        Route::get('/testimonial', 'testimonial')->name('testimonial');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');

    });
});

//  blog
Route::prefix('blog')->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog-grid', 'blogGrid')->name('blogGrid');
        Route::get('/single-blog', 'singleBlog')->name('singleBlog');
    });
});
