<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/dashboard/home', function () {
    return view('pages.dashboard.home');
});

Route::get('/dashboard/about', function () {
    return view('pages.dashboard.about');
});

Route::get('/dashboard/speakers', function () {
    return view('pages.dashboard.speakers');
});

Route::get('/dashboard/call-for-papers', function () {
    return view('pages.dashboard.callpaper');
});

Route::get('/dashboard/for-author', function () {
    return view('pages.dashboard.forauthor');
});

Route::get('/dashboard/registration', function () {
    return view('pages.dashboard.registrationfee');
});

Route::get('/dashboard/commitee', function () {
    return view('pages.dashboard.commitee');
});

Route::get('/dashboard/footer', function () {
    return view('pages.dashboard.footer');
});

Route::get('/dashboard/speaker/edit', function () {
    return view('pages.dashboard.speakeredit');
});

Route::get('/dashboard/call-for-papers/content/edit', function () {
    return view('pages.dashboard.callforpaperedit');
});

Route::get('/dashboard/for-author/content/edit', function () {
    return view('pages.dashboard.forauthoredit');
});

Route::get('/dashboard/registration/bank-account/edit', function () {
    return view('pages.dashboard.registrationfeeedit');
});

Route::get('/dashboard/commitee/content/edit', function () {
    return view('pages.dashboard.commiteeedit');
});
