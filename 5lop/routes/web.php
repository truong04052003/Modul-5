<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
// - Khai báo route resource để làm việc với posts
Route::prefix('products')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    //thùng rác
    Route::get('/garbagecan', [ProductController::class, 'garbagecan'])->name('products.garbagecan');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
    Route::get('/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    //tìm kiếm 
    Route::post('/search', [ProductController::class, 'search'])->name('products.search');
    //xuất file excel
    Route::get('/exportExcel', [ProductController::class, 'Excel'])->name('products.Excel');
});




Route::get('/category', [CategoryController::class, 'index'])->name('category');



