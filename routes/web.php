<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class , 'index'])->name('Home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/users',[DashboardController::class,'users'])->name('users');
    Route::get('/groups',[DashboardController::class,'groups'])->name('groups');
    Route::get('/role/assign',[DashboardController::class,'assignRoles'])->name('assign_roles');
    Route::get('/projects',[DashboardController::class,'projects'])->name('projects');
    Route::get('/divisions',[DashboardController::class,'divisions'])->name('divisions');
    
    
});
