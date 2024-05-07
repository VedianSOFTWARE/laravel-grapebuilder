<?php

use Illuminate\Support\Facades\Route;
use Vedian\Grapebuilder\Controllers\LayoutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([
    'prefix' => 'layout'
], function () {
    Route::resource('{type}', LayoutController::class);
});
