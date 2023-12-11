<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dingweicheng', function () {
    return view('weicheng.dingweicheng');
});
Route::get('/about', function () {
    return view('main_pages.about');
});
Route::get('/contact', function () {
    return view('main_pages.contact');
});
Route::get('/portfolio', function () {
    return view('main_pages.portfolio');
});
Route::get('/services', function () {
    return view('main_pages.services');
});
Route::get('/service-1', function () {
    return view('services.one');
});
Route::get('/service-2', function () {
    return view('services.two');
});
Route::get('/service-3', function () {
    return view('services.three');
});
Route::get('/service-4', function () {
    return view('services.four');
});
Route::get('/service-5', function () {
    return view('services.five');
});
Route::get('/service-6', function () {
    return view('services.six');
});
Route::get('/service-7', function () {
    return view('services.seven');
});
Route::get('/service-8', function () {
    return view('services.eight');
});