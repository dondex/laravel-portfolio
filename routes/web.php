<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;
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
// To Welcome Page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// To Blog Page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');


// To create a blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');

// To Single Blog Post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// To Edit Blog Post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');

// To Update Blog Post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');

// To Delete Blog Post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');


// To store a blog post to db
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

//Category resource controller
Route::resource('/categories', CategoryController::class);

// //The resource controller above under the hood.
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::get('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::get('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::get('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
