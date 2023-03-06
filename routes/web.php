<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



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
    Route::get('/groups',[DashboardController::class,'groups'])->name('groups');
    Route::get('/role/assign',[DashboardController::class,'assignRoles'])->name('assign_roles');
    Route::get('/project/create',[DashboardController::class,'projectcreate'])->name('projectcreate');
    Route::get('/project/timeline/{id}',[DashboardController::class,'projecttimeline'])->name('projecttimeline');

    Route::get('/categories',[DashboardController::class,'categories'])->name('categories');

    Route::get('/team',[DashboardController::class,'team'])->name('team');

    Route::get('/manual',[DashboardController::class,'manual'])->name('manual');
   

    //ADMIN ROUTES
    Route::get('/admin/users',[AdminController::class,'users'])->name('adminusers')->middleware('can:manage_users');
    Route::get('/admin/projects',[AdminController::class,'projects'])->name('adminprojects');
    Route::get('/admin/project/create',[AdminController::class,'createproject'])->name('createproject');
    Route::get('/admin/edit/project/{id}',[AdminController::class,'editProject'])->name('editproject');
    Route::get('/admin/project/{id}',[AdminController::class,'projectdetail'])->name('projectdetail');



    // USERS ROUTES
    Route::get('/user/projects',[UserController::class,'projects'])->name('userprojects');
    Route::get('/manage/user/projects',[UserController::class,'manageprojects'])->name('manageuserprojects');
     

    
    
});
