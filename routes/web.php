<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Defandi Afif Darmawan",
        "Instagram" => "@defann.drmwn",
        "gambar" => "Defandi.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::get('/contacts', function () {
    return view('contacts', [
        "title" => "Contacts"
    ]);
});