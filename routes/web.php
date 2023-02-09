<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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
    Route::get('/users',[DashboardController::class,'users'])->name('users')->middleware('can:manage_users');
    Route::get('/groups',[DashboardController::class,'groups'])->name('groups');
    Route::get('/role/assign',[DashboardController::class,'assignRoles'])->name('assign_roles');
    Route::get('/projects',[DashboardController::class,'projects'])->name('projects');
    Route::get('/project/create',[DashboardController::class,'projectcreate'])->name('projectcreate');
    Route::get('/project/{id}',[DashboardController::class,'projectdetail'])->name('projectdetail');
    Route::get('/project/timeline/{id}',[DashboardController::class,'projecttimeline'])->name('projecttimeline');

    Route::get('/manage/divisions',[DashboardController::class,'manageDivisions'])->name('managedivisions');
    Route::get('/categories',[DashboardController::class,'categories'])->name('categories');

    Route::get('/divisions',[DashboardController::class,'divisions'])->name('divisions');
    Route::get('/team',[DashboardController::class,'team'])->name('team');

    Route::get('/manual',[DashboardController::class,'manual'])->name('manual');
   

    // USERS ROUTES
    Route::get('/user/projects',[UserController::class,'projects'])->name('userprojects');
    Route::get('/manage/user/projects',[UserController::class,'manageprojects'])->name('manageuserprojects');
     

    
    
});
