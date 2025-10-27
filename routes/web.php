<?php

use Illuminate\Support\Facades\Route;


// Home Page (pointing to pages/index.blade.php)
Route::get('/', function () {
    return view('pages.index');
})->name('home');

// Resume Page (pointing to pages/resume.blade.php)
Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');

// Projects Page (pointing to pages/projects.blade.php)
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

// Contact Page (pointing to pages/contact.blade.php)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// If views/welcome.blade.php exists and you need it:
Route::get('/welcome', function () {
    return view('welcome');
});
