<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EquipmentPurchase;

class EquipmentPurchaseController extends Controller
{
    public function showEquipmentPurchase()
    {
        $equipments = EquipmentPurchase::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.equipments.purchase.equipment-purchase-list', compact('equipments'));
    }

    public function addEquipmentPurchase()
    {
        return view('pages.expenses.equipments.purchase.add-equipment-purchase');
    }
    public function storeEquipmentPurchase(Request $request)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'equipment_name'    => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $equipments = new EquipmentPurchase();

        $equipments->shop_details      = $request->shop_details;
        $equipments->equipment_name    = $request->equipment_name;
        $equipments->quantity          = $request->quantity;
        $equipments->unit_price        = $request->unit_price;
        $equipments->total_price       = $request->total_price;
        $equipments->paid              = $request->paid;
        $equipments->due               = $request->due;
        $equipments->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $equipments->note              = $request->note;

        $equipments->save();

        return redirect()->route('admin.equipment.purchase.show')->with('success', 'Equipment purchase details added successfully');
    }

    public function editEquipmentPurchase($id)
    {
        $equipment = EquipmentPurchase::findOrFail($id);
        return view('pages.expenses.equipments.purchase.edit-equipment-purchase', compact('equipment'));
    }

    public function updateEquipmentPurchase(Request $request, $id)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'equipment_name'    => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $equipments = EquipmentPurchase::findOrFail($id);

        $equipments->shop_details      = $request->shop_details;
        $equipments->equipment_name    = $request->equipment_name;
        $equipments->quantity          = $request->quantity;
        $equipments->unit_price        = $request->unit_price;
        $equipments->total_price       = $request->total_price;
        $equipments->paid              = $request->paid;
        $equipments->due               = $request->due;
        $equipments->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $equipments->note              = $request->note;

        $equipments->save();

        return redirect()->route('admin.equipment.purchase.show')->with('success', 'Equipment purchase details updated successfully');
    }

    public function deleteEquipmentPurchase($id)
    {
        $equipments = EquipmentPurchase::findOrFail($id);
        $equipments->delete();
        return redirect()->route('admin.equipment.purchase.show')->with('success', 'Equipment purchase details deleted successfully');
    }
}
