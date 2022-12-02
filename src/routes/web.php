<?php


use Anitesh\First\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/greet/{name}', FirstController::class);

// use Anitesh\First\First;

// Route::get('/greet/{name}', function($sName) {
//     $oGreetr = new First();
//     return $oGreetr->first($sName);
// });