<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Hiển thị tất cả thể loại
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Hiển thị danh sách sản phẩm theo category + lọc
    public function filter(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all(); // để hiển thị danh sách thể loại ở view

        $query = Product::where('category_id', $id);

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('keyword')) {
            $query->where('description', 'like', '%' . $request->keyword . '%');
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        if ($request->filled('brand')) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        $products = $query->paginate(10);

        return view('categories.products', compact('category', 'categories', 'products'));
    }
}
