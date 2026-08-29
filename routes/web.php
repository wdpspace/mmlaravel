<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {

$ninjas = [
    ["name" => "mario", "skill" => 75, "id" => "1"],
    ["name" => "luigi", "skill" => 45, "id" => "2"],
];

return view('admin.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});
