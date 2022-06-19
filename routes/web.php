<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ShowPostController;
use App\Models\Category;
use App\Models\User;
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
//post
Route::get('/', [ShowPostController::class, 'index'])->name('post.index');
Route::get('/posts/{post:slug}/details', [ShowPostController::class, 'details'])->name('post.details');
Route::post('/posts/{post:slug}/comment', [CommentController::class, 'store'])->name('comment.store');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('show', [
        'posts' => $category->posts,
    ]);
})->name('post.category.show');

Route::get('/posts/{user:name}', function (User $user) {
    return view('show', [
        'posts' => $user->posts,
    ]);
})->name('post.author.show');



//contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth',], function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('user', UserController::class);
    Route::get('post/{post}/details', [PostController::class, 'details'])->name('post.details');
    Route::resource('post', PostController::class);
    Route::resource('tag', TagController::class);
    Route::resource('category', CategoryController::class);
});

require __DIR__ . '/auth.php';