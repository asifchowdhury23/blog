<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubCategoryController;

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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/',[ZenBlogController::class,'index'])->name('home');
Route::get('/about-details',[ZenBlogController::class,'aboutDetails'])->name('about.details');
Route::get('/contact-details',[ZenBlogController::class,'contactDetails'])->name('contact.details');
Route::get('/categories/{catId}',[ZenBlogController::class,'categoriesPage'])->name('categories.page');

Route::group(['middleware'=>'blogUser'],function(){
    Route::get('/blog-details/{slug}',[ZenBlogController::class,'blogDetails'])->name('blog.details');
    Route::post('/new-comment',[CommentController::class,'saveComment'])->name('new.comment');

});
Route::get('/user-register',[ZenBlogController::class,'userRegister'])->name('user.register');
Route::post('/save-user',[ZenBlogController::class,'saveUser'])->name('save.user');

Route::get('/user-login',[ZenBlogController::class,'loginUser'])->name('user.login');
Route::post('/user-login',[ZenBlogController::class,'checkLogin'])->name('user.login');
Route::get('/user-logout',[ZenBlogController::class,'logout'])->name('user.logout');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');

    Route::get('/sub-category',[SubCategoryController::class,'index'])->name('sub.category');
    Route::post('/new-sub-category',[SubCategoryController::class,'saveSubCategory'])->name('new.sub.category');

    Route::get('/author',[AuthorController::class,'index'])->name('author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new.author');

    Route::get('/add-blog',[BlogController::class,'index'])->name('add.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');

    Route::get('/status/{id}',[BlogController::class,'status'])->name('status');
    Route::post('/blog-delete',[BlogController::class,'blogDelete'])->name('blog.delete');

});
