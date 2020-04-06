<?php

use App\Http\Controllers\ShowHome;
use App\Http\Controllers\Auth\LoginWithGoogle;
use App\Http\Controllers\Auth\HandleGoogleCallback;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\ShowDashboard;
use App\Http\Controllers\ShowReflect;
use App\Http\Controllers\ShowSettings;
use App\Http\Controllers\ShowGiveFeedback;
use App\Http\Controllers\ShowViewFeedback;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShowHome::class, 'handle'])
    ->name('show-home');

Route::get('/login', [LoginWithGoogle::class, 'handle'])
    ->name('auth-login-with-google');

Route::get('/auth/handle-google-callback', [HandleGoogleCallback::class, 'handle'])
    ->name('auth-handle-google-callback');

Route::get('/logout', [Logout::class, 'handle'])
    ->name('auth-logout');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [ShowDashboard::class, 'handle'])
        ->name('show-dashboard');

    Route::get('/reflect', [ShowReflect::class, 'handle'])
        ->name('show-reflect');

    Route::get('/give-feedback', [ShowGiveFeedback::class, 'handle'])
        ->name('show-give-feedback');

    Route::get('/view-feedback/{answer}', [ShowViewFeedback::class, 'handle'])
        ->name('show-view-feedback');

    Route::get('/settings', [ShowSettings::class, 'handle'])
        ->name('show-settings');
});
