<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Hiển thị danh sách các loại sách
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Hiển thị sách theo loại
    public function show($id)
{
    $category = Category::find($id);
    $books = $category->books; // Lấy sách theo loại
    return view('category', compact('books', 'category'));
}
}