<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'code'         => 'nullable',
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
        $sizes = Size::all();
        $colors = Color::all();
        return view('pages.products.edit-product', compact('product', 'sizes', 'colors'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'code'         => 'nullable',
            'size'         => 'nullable',
            'color'        => 'nullable',
            'quantity'     => 'required',
            'unit_price'   => 'required',
            'status'       => 'required',
            'details'      => 'nullable',
        ]);

        $product = Product::findOrFail($id);

        if($request->img == '' || $request->img == null && $product->img){
            $product->img              = $product->img;        }

        if($request->img != '' || $request->img != null || $product->img){

            if ($request->hasFile('img')) {
                $destination = 'uploads/products'.$product->img;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('img');
                $thumbNameTmp = md5_file($file->getRealPath());
                $extension = $file->getClientOriginalExtension();
                $filename = 'products' . $thumbNameTmp . '_' . time() . '.' . $extension;
                $path = 'uploads/products';
                $imgUrl = $file->move($path, $filename);
                $request['img'] = $imgUrl;
            }
        }




        $product->name             = $request->name;
        $product->code             = $request->code;
        $product->size             = $request->size;
        $product->color            = $request->color;
        $product->quantity         = $request->quantity;
        $product->unit_price       = $request->unit_price;
        $product->status           = $request->status;
        $product->details          = $request->details;

        $product->save();

        return redirect()->route('admin.products.show')->with('success', 'Product information updated successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.show')->with('success', 'Product deleted successfully');
    }
}

