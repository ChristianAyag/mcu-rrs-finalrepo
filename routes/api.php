<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// List all admins
Route::get('/superadmin/permission-control', [RegisteredUserController::class, 'index']);

// Store new admin
Route::post('/superadmin/store', [RegisteredUserController::class, 'addUser']);
?>