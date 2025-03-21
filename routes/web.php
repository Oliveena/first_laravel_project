<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/registry", function () {

    $products = [
        ["name" => "Mepilex", "price" => 45, "id" => "1"],
        ["name" => "Mepilex Border", "price" => 50, "id" => "2"],
    ];
    return view('registry.index', ["greeting" => "hello", "products" => $products]);
});

Route::get("/registry/{id}", function ($id) {
// fetch record with id
    return view('registry.show', ["id" => $id]);
});
