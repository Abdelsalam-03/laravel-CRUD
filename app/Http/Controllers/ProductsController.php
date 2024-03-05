<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $products = [
        ['id'=> 1, 'name' => 'Car', 'price' => 1050000],
        ['id'=> 2, 'name' => 'Motorcycle', 'price' => 250000],
        ['id'=> 3, 'name' => 'fruit', 'price' => 25],
        ['id'=> 4, 'name' => 'mobile', 'price' => 14000],
        ['id'=> 5, 'name' => 'hoodie', 'price' => 450],
        ['id'=> 6, 'name' => 'shoes', 'price' => 350]
    ];
    public function index(){
        return view("products.products", ['products' => $this->products]);
    }

    public function create(){
        return view('products.createProduct');
    }

    public function store(){
        // $this->products[] = ['id' => request()->id, 'name' => request()->name, 'price' => request()->price];
        // The logic of validating and filtering data 
        // The logic of storing data 
        // Then redirect to the all products page 
        return redirect(route('products'));
    }
    
    public function show($id){
        // the logic that gets the specified product from DB
        $product = array_filter($this->products, fn($element) => $element['id'] == $id);
        $product = end($product);
        if (! $product) {
            return redirect(route('products'));
        } else {
            return view('products.showProduct', ['product' => $product]);
        }
    }

    public function edit($id){
        // the logic that gets the specified product from DB
        $product = array_filter($this->products, fn($element) => $element['id'] == $id);
        $product = end($product);
        if (! $product) {
            return redirect(route('products'));
        } else {
            return view('products.editProduct', ['product' => $product]);
        }
    }

    public function update($id){
        // new product 
        $newProduct = ['id' => request()->id, 'name' => request()->name, 'price' => request()->price];
        // the logic that gets the specified product from DB
        $product = array_filter($this->products, fn($element) => $element['id'] == $id);
        $oldProduct = end($product);
        if (! $oldProduct) {
            // Product Didn't Updat 
        } else {
            //Product Updated
        }
        return redirect(route('products'));
    }
    public function destroy($id){
        // Delete The product that have this ID
        return redirect(route('products'));
    }
}
