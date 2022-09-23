<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
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
        $sizes = Size::where('status', '1')->get();
        $colors = Color::where('status', '1')->get();
        return view('pages.products.add-product', compact('sizes', 'colors'));
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'code'         => 'nullable|unique:products',
            'size'         => 'nullable',
            'color'        => 'nullable',
            'quantity'     => 'required',
            'unit_price'   => 'required',
            'status'       => 'required',
            'details'      => 'nullable',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $thumbNameTmp = md5_file($file->getRealPath());
            $extension = $file->getClientOriginalExtension();
            $filename = 'products' . $thumbNameTmp . '_' . time() . '.' . $extension;
            $path = 'uploads/products';
            $imgUrl = $file->move($path, $filename);
            $request['img'] = $imgUrl;


        }

        $product = new Product();

        $product->name             = strtolower($request->name);
        if($request->prefix || $request->suffix){
            $product->code = $request->prefix . $request->code . $request->suffix;
        }else{
            $product->code = $request->code;
        }
        $product->size             = $request->size;
        $product->color            = $request->color;
        $product->quantity         = $request->quantity;
        $product->unit_price       = $request->unit_price;
        $product->status           = $request->status;
        $product->details          = $request->details;
        $product->img              = isset($imgUrl) ? $imgUrl : '';


        $product->save();

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

