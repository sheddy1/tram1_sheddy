<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'welcome'])->name('welcome');

Route::get('videos', [MainController::class, 'videos'])->name('videos');

Route::get('news', [MainController::class, 'news'])->name('news');

Route::get('about', [MainController::class, 'about'])->name('about');

Route::get('contact', [MainController::class, 'contact'])->name('contact');

Route::get('video_play', [MainController::class, 'video_play'])->name('video_play');

Route::get('login', [MainController::class, 'login'])->name('login');
