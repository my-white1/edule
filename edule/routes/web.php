<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCoursesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/blog', [BlogController::class , 'index'])->name('blog');
Route::get('/contact', [ContactController::class , 'index'])->name('contact');
Route::get('/course', [CourseController::class , 'index'])->name('course');
Route::get('/blog/show/{post}', [BlogController::class , 'show'])->name('blog.show');

Route::resource('permissions', PermissionController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('/users', UsersController::class);
    Route::resource('/courses', AdminCoursesController::class);
    Route::resource('/groups', GroupController::class);
    Route::resource('/rooms', RoomController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/posts', PostController::class);
});

require __DIR__.'/auth.php';
