<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ProjectDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\NewsController;
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


// Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blog-detail');
Route::get('/project-detail', [ProjectDetailController::class, 'index'])->name('project-detail');
// Route::get('/', function(){
//     return view('layouts.master');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/HalamanNews', [HalamanNewsController::class, 'index']);
// Route::get('/HalamanHome', [HalamanHomeController::class, 'index']);
// Route::get('/HalamanAboutUs', [HalamanAboutUsController::class, 'index']);
Route::get('/HalamanProduct', [ProductController::class, 'index'])->name('product');
Route::get('/HalamanProgram', [ProgramsController::class, 'index'])->name('program');
Route::get('/HalamanNews', [NewsController::class, 'index'])->name('news');
// Route::get('/HalamanProgram', [HalamanProgramController::class, 'index']);
// Route::get('/HalamanContactUs', [HalamanContactUsController::class, 'index']);
