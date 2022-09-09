<?php

namespace App\Http\Controllers;

use App\Models\AccessoryType;
use Illuminate\Http\Request;

class AccessoryTypeController extends Controller
{
    public function showAccessory()
    {
        $accessories = AccessoryType::orderBy('id', 'DESC')->get();
        return view('pages.others.accessories.all-accessories', compact('accessories'));
    }
    public function addAccessory()
    {
        return view('pages.others.accessories.add-accessories');
    }
    public function storeAccessory(Request $request)
    {
        $request->validate([
            'accessories' => 'required|unique:accessory_types',
            'status' => 'required',
        ]);

        $accessory = new AccessoryType();

        $accessory->accessories = $request->accessories;
        $accessory->status = $request->status;

        $accessory->save();

        return redirect()->route('admin.accessory.show')->with('success', 'Accessory Added Successfully');
    }
    public function editAccessory($id)
    {
        $accessory = AccessoryType::findOrFail($id);
        return view('pages.others.accessories.edit-accessories', compact('accessory'));
    }
    public function updateAccessory(Request $request, $id)
    {
        $accessory = AccessoryType::findOrFail($id);
        $request->validate([
            'accessories' => 'required',
            'status' => 'required',
        ]);
        $accessory->accessories = $request->accessories;
        $accessory->status = $request->status;

        $accessory->save();

        return redirect()->route('admin.accessory.show')->with('success', 'Accessory Updated Successfully');
    }

    public function deleteFabrics($id)
    {
        $fabrics = AccessoryType::findOrFail($id);
        $fabrics->delete();
        return redirect()->route('admin.fabrics.show')->with('success', 'Fabrics Deleted Successfully');
    }
}
