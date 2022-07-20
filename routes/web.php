<?php

use App\Http\Controllers\BlogController;
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
Route::delete('/blog/{post}', [BlogController::class, 'delete'])->name('blog.delete');


// To store a blog post to db
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
