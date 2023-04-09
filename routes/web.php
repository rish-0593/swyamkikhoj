<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Vendor\FilepondController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\PostController as PostAdminController;


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

Route::get('/', [HomeController::class, 'home'])->name('guest.home');
Route::get('about-us', [HomeController::class, 'about'])->name('guest.about');
Route::get('contact-us', [HomeController::class, 'contact'])->name('guest.contact');

Route::get('/post/{slug}', [PostController::class, 'post'])->name('guest.post');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route ::get('category' , [CategoryController::class, 'list' ])->name('category');
        Route ::post('update-or-create-category', [CategoryController::class, 'updateOrCreate'])->name('category.updateOrCreate');
        Route ::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        Route ::get('post' , [PostAdminController::class, 'list'])->name('post');
        Route ::get('post/add', [PostAdminController::class, 'add'])->name('post.add');
        Route ::post('post/add', [PostAdminController::class, 'create'])->name('post.create');
        Route ::get('post/{id}/edit', [PostAdminController::class, 'edit'])->name('post.edit');
        Route ::post('post/{id}/update', [PostAdminController::class, 'update'])->name('post.update');
        Route ::get('post/{id}/delete', [PostAdminController::class, 'delete'])->name('post.delete');
    });

     Route ::get('logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::post('filepond/upload', [FilepondController::class, 'upload'])->name('filepond.upload');
Route::delete('filepond/revert', [FilepondController::class, 'revert'])->name('filepond.revert');
Route::get('filepond/restore', [FilepondController::class, 'restore'])->name('filepond.restore');

require __DIR__.'/auth.php';
