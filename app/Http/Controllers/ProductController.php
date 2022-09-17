<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        return view('pages.products.product-list', compact('products'));
    }

    public function addProduct()
    {
        return view('pages.products.add-product');
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'code'         => 'required',
            'size'         => 'nullable',
            'color'        => 'nullable',
            'quantity'     => 'required',
            'unit_price'   => 'nullable',
            'status'       => 'required',
            'details'      => 'nullable',
        ]);

        $products = new Product();

        $products->name             = $request->name;
        $products->code             = $request->code;
        $products->size             = $request->size;
        $products->color            = $request->color;
        $products->quantity         = $request->quantity;
        $products->unit_price       = $request->unit_price;
        $products->status           = $request->status;
        $products->details          = $request->details;

        $products->save();

        return redirect()->route('admin.products.show')->with('success', 'Product added successfully');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.products.edit-product', compact('product'));
    }

    public function updateRent(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'code'         => 'required',
            'size'         => 'nullable',
            'color'        => 'nullable',
            'quantity'     => 'required',
            'unit_price'   => 'nullable',
            'status'       => 'required',
            'details'      => 'nullable',
        ]);

        $products = Product::findOrFail($id);

        $products->name             = $request->name;
        $products->code             = $request->code;
        $products->size             = $request->size;
        $products->color            = $request->color;
        $products->quantity         = $request->quantity;
        $products->unit_price       = $request->unit_price;
        $products->status           = $request->status;
        $products->details          = $request->details;

        $products->save();

        return redirect()->route('admin.products.show')->with('success', 'Product information updated successfully');
    }

    public function deleteRent($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('admin.products.show')->with('success', 'Product deleted successfully');
    }
}

