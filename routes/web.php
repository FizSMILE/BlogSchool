<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);


//Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

//Resource CRUD
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');


// Halaman Single Post
Route::get('posts/{bg:slug}', [BlogController::class, 'show']);
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load('category', 'user'),
        'category' => $category->name
    ]);
});

Route::get('/profiles/{profile:username}', function(User $profile){
    return view('profile', [
        'title' => 'User Profile',
        'user' => $profile,
        'posts' => $profile->blogs->load('category', 'user'),
    ]);
});

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
