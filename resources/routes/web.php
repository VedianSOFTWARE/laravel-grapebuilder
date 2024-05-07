<?php

use Illuminate\Support\Facades\Route;
use Vedian\Grapebuilder\Controllers\HeaderController;
use Vedian\Grapebuilder\Controllers\LayoutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([
    'prefix' => 'layout'
], function () {
    // Route::get('{type}/create', [LayoutController::class, 'create']);
    // Route::get('show/{layout}', [LayoutController::class, 'show']);
    Route::resource('header', HeaderController::class);
});


