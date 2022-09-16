<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function showSize()
    {
        $sizes = Size::all();
        return view('pages.others.sizes.all-sizes', compact('sizes'));
    }
    public function addSize()
    {
        return view('pages.others.sizes.add-size');
    }
    public function storeSize(Request $request)
    {
        $request->validate([
            'size' => 'required',
            'status' => 'required',
        ]);

        $size = new Size();

        $size->size = $request->size;
        $size->status = $request->status;

        $size->save();

        return redirect()->route('admin.size.show')->with('success', 'Size Added Successfully');
    }
    public function editSize($id)
    {
        $size = Size::findOrFail($id);
        return view('pages.others.sizes.edit-size', compact('size'));
    }
    public function updateSize(Request $request, $id)
    {
        $size = Size::findOrFail($id);
        $request->validate([
            'size' => 'required',
            'status' => 'required',
        ]);
        $size->size = $request->size;
        $size->status = $request->status;

        $size->save();

        return redirect()->route('admin.size.show')->with('success', 'Size Updated Successfully');
    }

    public function deleteSize($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();
        return redirect()->route('admin.size.show')->with('success', 'Size Deleted Successfully');
    }
}

