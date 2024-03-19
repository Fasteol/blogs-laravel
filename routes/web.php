<?php

use Illuminate\Support\Facades\Route;
use App\Models\DataBlogs;
use App\Http\Controllers\WriterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/', [WriterController::class, 'home'])->name('home');
    Route::get('about', [WriterController::class, 'about'])->name('about');
    Route::get('blogs', [WriterController::class, 'blogs'])->name('blogs');
    Route::get('blogs/detail/{id}', [WriterController::class, 'detailBlogs'])->name('blogs_detail');
    Route::get('create', [WriterController::class, 'createBlogs'])->name('create_blogs');
    Route::post('blogs', [WriterController::class, 'storeBlog'])->name('blogs.post');
    Route::get('search', [WriterController::class, 'searchBlogs'])->name('blogs.search');







