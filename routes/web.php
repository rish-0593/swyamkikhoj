<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\PostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as PostadminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

    Route ::get('category' , [CategoryController::class, 'list' ])->name('category');
    Route ::post('add-category', [CategoryController::class, 'add'])->name('category.add');
    Route ::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route ::get('posts' , [PostadminController::class, 'Posts' ])->name('post');
    Route ::get('add-post', [PostadminController::class, 'add_post'])->name('post.add');
    Route ::post('create-post', [PostadminController::class, 'createPost'])->name('post.create');
    Route ::get('delete-post/{id}', [PostadminController::class, 'delete_post'])->name('post.delete');

    Route ::get('logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
