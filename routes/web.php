<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")-> name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {

Route::get("/home", "PageController@home");
Route::get("/buku", "PageController@buku"); 
Route::get("/settings", "PageController@settings");
Route::post("/save", "PageController@savedata");
Route::get("/buku/formadd", "PageController@formaddbuku");
Route::get("/buku/edit/{id}", "PageController@fromeditbuku");
Route::post("/buku/update/{id}", "PageController@updateBuku");
Route::get("/buku/delete/{id}", "PageController@deleteBuku");
Route::post("/settings/save", "PageController@saveSettings");
Route::post('/logout', 'AuthController@logout')->name('logout');
Route::get('/changepassword', 'PageController@showChangePasswordForm');
Route::post('/changepassword', 'PageController@changePassword');
});



