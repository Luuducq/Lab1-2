<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;


// Route cho trang chủ: hiển thị 8 sách có giá cao nhất và thấp nhất
Route::get('/', [BookController::class, 'index']);

Route::get('/books', [BookController::class, 'allBooks']); 

// Route cho hiển thị sách theo loại
Route::get('/category/{id}', [CategoryController::class, 'show']);

// Route cho hiển thị chi tiết sách
Route::get('/book/{id}', [BookController::class, 'show']);

Route::get('/books', [BookController::class, 'allBooks']);

Route::get('/category/{id}', [CategoryController::class, 'show']);