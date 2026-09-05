<?php

use App\Http\Controllers\ApiTestController;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/apitest-form', function () {
    return view('test');
});


Route::post('/apitest', [ApiTestController::class, 'checkapi'])->withoutMiddleware([PreventRequestForgery::class]);


