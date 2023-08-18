<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('home.index');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('page/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('page/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('page/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');


