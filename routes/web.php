<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\Login;
use App\Http\Controllers\authentications\Logout;
use App\Http\Controllers\authentications\Register;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pages\LandingController;
use App\Http\Controllers\PostController;

// Main Page Route
Route::get('/', [LandingController::class, 'index'])->name('landing');


Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// locale
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login', [Login::class, 'index'])->name('login-page');
Route::get('/auth/register', [Register::class, 'index'])->name('register-page');

Route::post('/auth/login', [Login::class, 'login'])->name('login');
Route::post('/auth/register', [Register::class, 'register'])->name('register');
Route::get('/auth/logout', [Logout::class, 'logout'])->name('logout');

Route::post('message/send',[ContactUsController::class , 'sendMessage'])->name('message.send');


Route::group(['middleware'=>'admin' , 'prefix' => 'admin'], function(){
  Route::get('/',[HomeController::class,'index'])->name('admin-home');

  Route::group(['controller'=>ProductController::class , 'prefix'=>'products'],function(){
    Route::get('list','list')->name('product-list');
    Route::get('list/get','getList')->name('product-list-get');
    Route::get('add','create')->name('product-add');
    Route::post('add','store')->name('product-store');
    Route::get('show/{product}','show')->name('product-show');
    Route::get('edit/{product}','edit')->name('product-edit');
    Route::put('edit/{product}','update')->name('product-update');
    Route::delete('delete/{product}','destroy')->name('product-destroy');
  });

  Route::get('reviews',[ReviewController::class,'index'])->name('reviews');
});

Route::middleware('auth')->group(function(){
  Route::get('/home', [HomePage::class, 'index'])->name('pages-home');
  Route::get('/product/{id}/buy', [HomePage::class, 'makeOrder'])->name('make-order');
  Route::post('/product/{id}/review', [HomePage::class, 'makeOrderReview'])->name('make-order-review');

  Route::get('community',[CommunityController::class,'index'])->name('community');

  Route::post('post/add',[PostController::class,'store'])->name('post-add');

  Route::post('comment/add/{post}',[CommentController::class,'store'])->name('comment-add');
});
