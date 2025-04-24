<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create() {
        return view('products.create');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:2',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|url', // Вече е URL, не файл
        ]);
    
        Product::create($validated);
    
        return redirect()->route('products.index')->with('success', 'Продуктът е добавен успешно!');
    }

    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
