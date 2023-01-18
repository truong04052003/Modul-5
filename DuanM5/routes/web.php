<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
//
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




    Route::prefix('posts')->group(function () {

        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('{id}', [PostController::class, 'destroy'])->name('posts.destroy');
        //thùng rác
        // Route::get('/garbagecan', [PostController::class, 'garbagecan'])->name('posts.garbagecan');
        // Route::get('/restore/{id}', [PostController::class, 'restore'])->name('posts.restore');
        // Route::get('/deleteforever/{id}', [PostController::class, 'deleteforever'])->name('posts.deleteforever');
        // Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
        //tìm kiếm 
        // Route::post('/search', [PostController::class, 'search'])->name('posts.search');
        //xuất file excel
    });
    