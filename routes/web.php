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
});

Route::get('/our-vision', function () {
    return view('our-vision');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/media-coverage', function () {
    return view('media-coverage');
});

Route::get('/become-partner', function () {
    return view('become-partner');
})->name('partner');

Route::get('/members', function () {
    return view('members');
});
