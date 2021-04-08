<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Frontend Controller 
Route::get('blog', [App\Http\Controllers\BlogPostController::class, 'showBlogPage']);

// Search Post By Category
Route::get('category/{slug}', [App\Http\Controllers\BlogPostController::class, 'searchPostByCategory'])->name('search.post.category');

//Search Post By Tag
Route::get('tag/{slug}', [App\Http\Controllers\BlogPostController::class, 'searchPostByTag'])->name('search.post.tag');

//Search Post By SearchBar
Route::post('search', [App\Http\Controllers\BlogPostController::class, 'searchPostBySearchBar'])->name('search.post.searchbar');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Template Load 
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'ShowAdminLoginForm'])->name('admin.login');

Route::get('/admin/register', [App\http\Controllers\AdminController::class, 'ShowAdminRegister'])->name('admin.register');
Route::get('/admin/dashboard', [App\http\Controllers\AdminController::class, 'ShowAdminDashboard'])->name('admin.dashboard');

Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');
Route::post('admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('admin.register');


//Posts Controller 
//resource Controller
Route::resource('post', 'App\Http\Controllers\PostController');
Route::get('post-trash', 'App\Http\Controllers\PostController@postTrashShow')->name('post.trash');
Route::get('post-trash-update/{id}', 'App\Http\Controllers\PostController@postTrashUpdate')->name('post.trash.update');

//Post Status Inactive Custom Method
Route::get('post/status-inactive/{id}', 'App\Http\Controllers\PostController@StatusUpdateInactive');
//Post Status Active Custom Method
Route::get('post/status-active/{id}', 'App\Http\Controllers\PostController@StatusUpdateActive');




//Category Controller
//Resource Controller
Route::resource('category', 'App\Http\Controllers\CategoryController');
//Category Status Inactive Custom Method
Route::get('category/status-inactive/{id}', 'App\Http\Controllers\CategoryController@StatusUpdateInactive');
//Category Status Active Custom Method
Route::get('category/status-active/{id}', 'App\Http\Controllers\CategoryController@StatusUpdateActive');



//Tag Controller
//Resource Controller
Route::resource('tag', 'App\Http\Controllers\TagController');
//Tag Status Inactive Custom Method
Route::get('tag/status-inactive/{id}', 'App\Http\Controllers\TagController@StatusUpdateInactive');
//Tag Status Active Custom Method
Route::get('tag/status-active/{id}', 'App\Http\Controllers\TagController@StatusUpdateActive');