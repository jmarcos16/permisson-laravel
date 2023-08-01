<?php

use App\Http\Controllers\PermissionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Vamos logar com o usuário de id 1 e dar permissão de admin
auth()->loginUsingId(1);
$user = User::find(1)->assignPermission('admin');

Route::get('/test-permission', PermissionController::class)
    ->name('test-permission')
    ->middleware('auth', 'can:admin');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
