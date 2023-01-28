<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\PostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;


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
    Route ::get('/Category' , [CategoryController::class, 'Category' ])->name('Category');
    Route ::get('/Posts' , [PostController::class, 'Posts' ])->name('Posts');
    Route ::post('/add_category', [CategoryController::class, 'add_category'])->name('add_category');
    Route ::get('/add_post', [PostController::class, 'add_post'])->name('addpost');
    Route ::post('/create_Post', [PostController::class, 'createPost'])->name('createPost');
});

require __DIR__.'/auth.php';
