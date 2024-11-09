<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Hiển thị trang chủ với 8 sản phẩm có giá cao nhất và thấp nhất
    public function index()
    {
        $highestPriceBooks = Book::orderBy('price', 'desc')->take(8)->get();
        $lowestPriceBooks = Book::orderBy('price', 'asc')->take(8)->get();
        return view('home', compact('highestPriceBooks', 'lowestPriceBooks'));
    }

    // Hiển thị tất cả sách
    public function allBooks()
{
    $books = Book::all(); // Lấy tất cả sách
    $categories = Category::all(); // Lấy tất cả danh mục
    return view('index', compact('books', 'categories')); // Trả về view với danh sách sách và danh mục
}

    // Hiển thị sách theo loại
    public function category($id)
    {
        $books = Book::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('category', compact('books', 'category'));
    }

    // Hiển thị chi tiết sách
    public function show($id)
    {
        $book = Book::find($id);
        return view('book', compact('book'));
    }
}