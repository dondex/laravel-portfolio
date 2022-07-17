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

// To Single Blog Post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// To create a blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

// To store a blog post to db
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
