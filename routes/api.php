<?php

use App\Http\Controllers\UserController;

Route::get('/users-api/{id}', [UserController::class, 'getUser']);
Route::post('/users-api', [UserController::class, 'createUser']);
Route::get('/orders-api/user/{userId}', [UserController::class, 'getOrderFromService']);

