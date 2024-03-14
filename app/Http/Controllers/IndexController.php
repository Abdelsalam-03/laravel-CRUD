<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index', [
            'categoriesCount' => Category::all()->count(),
            'productsCount' => Product::all()->count(),
            'categories' => Category::all()
        ]);
    }
}
