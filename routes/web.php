<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/our-vision', function () {
    return view('our-vision');
})->name('our-vision');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/media-coverage', function () {
    return view('media-coverage');
})->name('media');

Route::get('/become-partner', function () {
    return view('become-partner');
})->name('partner');

Route::get('/members', function () {
    return view('members');
})->name('members');

Route::get('/cse-members', function () {
    return view('cse-members');
})->name('cse-members');

Route::get('/member', function () {
    return view('member');
})->name('member');
