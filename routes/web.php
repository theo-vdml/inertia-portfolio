<?php

use App\Settings\ProfileSettings;
use App\Settings\SiteSettings;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function (SiteSettings $settings, ProfileSettings $profile) {
    return Inertia::render('Home', [
        'settings' => $settings,
        'profile' => $profile
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
