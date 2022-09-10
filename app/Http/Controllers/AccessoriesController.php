<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\AccessoryType;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function showAccessoriesExpenditure()
    {
        $accessories = Accessories::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.accessories.accessories-expenditure-list', compact('accessories'));
    }

    public function addAccessoriesExpenditure()
    {
        $accessoryTypes = AccessoryType::where('status', 1)->get();
        return view('pages.expenses.accessories.add-accessories-expenditure', compact('accessoryTypes'));
    }
    public function storeAccessoriesExpenditure(Request $request)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'accessories_name'  => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $accessories = new Accessories();

        $accessories->shop_details      = $request->shop_details;
        $accessories->accessories_name  = $request->accessories_name;
        $accessories->quantity          = $request->quantity;
        $accessories->unit_price        = $request->unit_price;
        $accessories->total_price       = $request->total_price;
        $accessories->paid              = $request->paid;
        $accessories->due               = $request->due;
        $accessories->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $accessories->note              = $request->note;

        $accessories->save();

        return redirect()->route('admin.accessories.expenditure.show')->with('success', 'Accessories expenditure added successfully');
    }

    public function editAccessoriesExpenditure($id)
    {
        $accessory = Accessories::findOrFail($id);
        $accessoryTypes = AccessoryType::where('status', 1)->get();
        return view('pages.expenses.fabrics.edit-fabrics-expenditure', compact('accessoryTypes', 'accessory'));
    }

    public function updateAccessoriesExpenditure(Request $request, $id)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'accessories_name'  => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $accessories = Accessories::findOrFail($id);

        $accessories->shop_details      = $request->shop_details;
        $accessories->accessories_name  = $request->accessories_name;
        $accessories->quantity          = $request->quantity;
        $accessories->unit_price        = $request->unit_price;
        $accessories->total_price       = $request->total_price;
        $accessories->paid              = $request->paid;
        $accessories->due               = $request->due;
        $accessories->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $accessories->note              = $request->note;

        $accessories->save();

        return redirect()->route('admin.accessories.expenditure.show')->with('success', 'Accessories expenditure updated successfully');
    }

    public function deleteAccessoriesExpenditure($id)
    {
        $accessories = Accessories::findOrFail($id);
        $accessories->delete();
        return redirect()->route('admin.accessories.expenditure.show')->with('success', 'Accessories expenditure deleted successfully');
    }
}
