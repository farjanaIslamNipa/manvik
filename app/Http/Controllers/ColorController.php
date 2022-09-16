<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function showColor()
    {
        $colors = Color::all();
        return view('pages.others.colors.all-colors', compact('colors'));
    }
    public function addColor()
    {
        return view('pages.others.colors.add-color');
    }
    public function storeColor(Request $request)
    {
        $request->validate([
            'color' => 'required',
            'status' => 'required',
        ]);

        $color = new Color();

        $color->color = $request->color;
        $color->status = $request->status;

        $color->save();

        return redirect()->route('admin.color.show')->with('success', 'Color Added Successfully');
    }
    public function editColor($id)
    {
        $color = Color::findOrFail($id);
        return view('pages.others.colors.edit-color', compact('color'));
    }
    public function updateColor(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $request->validate([
            'color' => 'required',
            'status' => 'required',
        ]);
        $color->color = $request->color;
        $color->status = $request->status;

        $color->save();

        return redirect()->route('admin.color.show')->with('success', 'Color Updated Successfully');
    }

    public function deleteColor($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->route('admin.color.show')->with('success', 'Color Deleted Successfully');
    }
}
