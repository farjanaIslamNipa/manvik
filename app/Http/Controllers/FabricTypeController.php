<?php

namespace App\Http\Controllers;

use App\Models\FabricType;
use Illuminate\Http\Request;

class FabricTypeController extends Controller
{
    public function showFabrics()
    {
        $fabrics = FabricType::all();
        return view('pages.others.fabrics.all-fabrics', compact('fabrics'));
    }
    public function addFabrics()
    {
        return view('pages.others.fabrics.add-fabrics');
    }
    public function storeFabrics(Request $request)
    {
        $request->validate([
            'fabrics' => 'required',
            'status' => 'required',
        ]);

        $fabrics = new FabricType();

        $fabrics->fabrics = $request->fabrics;
        $fabrics->status = $request->status;

        $fabrics->save();

        return redirect()->route('admin.fabrics.show')->with('success', 'Fabrics Added Successfully');
    }
    public function editFabrics($id)
    {
        $fabrics = FabricType::findOrFail($id);
        return view('pages.others.fabrics.edit-fabrics', compact('fabrics'));
    }
    public function updateFabrics(Request $request, $id)
    {
        $fabrics = FabricType::findOrFail($id);
        $request->validate([
            'fabrics' => 'required',
            'status' => 'required',
        ]);
        $fabrics->fabrics = $request->fabrics;
        $fabrics->status = $request->status;

        $fabrics->save();

        return redirect()->route('admin.fabrics.show')->with('success', 'Fabrics Updated Successfully');
    }

    public function deleteFabrics($id)
    {
        $fabrics = FabricType::findOrFail($id);
        $fabrics->delete();
        return redirect()->route('admin.fabrics.show')->with('success', 'Fabrics Deleted Successfully');
    }
}
