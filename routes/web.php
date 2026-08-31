<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.view');
});


Route::get('/admin/create', function() {
    return view('admin.create');
});