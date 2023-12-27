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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/donate', function () {
    return view('pages.donate');
});
Route::get('/support', function () {
    return view('pages.support');
});
Route::get('/events', function () {
    return view('pages.facility');
});
Route::get('/eventdetails', function () {
    return view('pages.event-details');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/gym', function () {
    return view('pages.gym');
});
Route::get('/kashmirmeeting', function () {
    return view('pages.kashmir-meeting-room');
});
Route::get('/orienthall', function () {
    return view('pages.orient-hall');
});
Route::get('/qordovameeting', function () {
    return view('pages.qordova-meeting-room');
});
Route::get('/youthcente', function () {
    return view('pages.youth-cente');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
