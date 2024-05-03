<?php

use Illuminate\Support\Facades\Route;
use Vediansoftware\Grapebuilder\Controllers\LayoutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('layout/header', function () {
    return 123;
});

Route::get('layout/{type}/create', [LayoutController::class, 'create']);
