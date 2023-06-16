<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductShowCategory()
    {
        $categories = ProductCategory::all();
        return view('dashboard.consignor.product-add', compact('categories'));
    }

    public function addProduct(Request $request)
    {
        $validate = $request->validate([
            'product-name' => 'required',
            'category' => 'required',
            'product-price' => 'required|numeric',
            'payment-option' => 'required',
            'product-image' => 'required|image',
            'product-description' => 'required',
            'flexCheckDefault' => 'required'
        ]);

        $newProduct = new Product();
        $newProduct->title = $validate['product-name'];
        $newProduct->consignor_id = auth()->id();
        $newProduct->product_category_id = $validate['category'];
        $newProduct->description = $validate['product-description'];
        $newProduct->price = $validate['product-price'];

        if ($request->hasFile('product-image')) {
            $image = $request->file('product-image');
            $imagePath = $image->store('product-images', 'public');
            $newProduct->image_url = $imagePath;
        }
        dd($newProduct);
        $newProduct->save();
        return redirect()->route('account.products')->with('success', 'Product added successfully');
    }
}
