<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairBill;

class RepairBillsController extends Controller
{
    public function showEquipmentRepairBill()
    {
        $equipments = RepairBill::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.equipments.repair.equipment-repair-list', compact('equipments'));
    }

    public function addEquipmentRepairBill()
    {
        return view('pages.expenses.equipments.repair.add-equipment-repair');
    }
    public function storeEquipmentRepairBill(Request $request)
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

        $equipments = new RepairBill();

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

        return redirect()->route('admin.equipment.repair.show')->with('success', 'Equipment repair details added successfully');
    }

    public function editEquipmentRepairBill($id)
    {
        $equipment = RepairBill::findOrFail($id);
        return view('pages.expenses.equipments.repair.edit-equipment-repair', compact('equipment'));
    }

    public function updateEquipmentRepairBill(Request $request, $id)
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

        $equipments = RepairBill::findOrFail($id);

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

        return redirect()->route('admin.equipment.repair.show')->with('success', 'Equipment repair details updated successfully');
    }

    public function deleteEquipmentRepairBill($id)
    {
        $equipments = RepairBill::findOrFail($id);
        $equipments->delete();
        return redirect()->route('admin.equipment.repair.show')->with('success', 'Equipment repair details deleted successfully');
    }
}
