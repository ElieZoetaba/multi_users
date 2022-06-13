<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user-dashboard');
})->name('user.dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('/create', [CreateController::class, 'create']);
Route::get('/create', [App\Http\Livewire\CreatePosts::class, 'create'])->name('create');
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{id}/update', [App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/delete', [App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/store', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');

