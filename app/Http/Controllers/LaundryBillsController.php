<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaundryBill;

class LaundryBillsController extends Controller
{
    public function showLaundryBill()
    {
        $laundryBills = LaundryBill::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.iron.iron-expenditure-list', compact('laundryBills'));
    }

    public function addLaundryBill()
    {
        return view('pages.expenses.iron.add-iron-expenditure');
    }
    public function storeLaundryBill(Request $request)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'prod_name'         => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $laundryBills = new LaundryBill();

        $laundryBills->shop_details      = $request->shop_details;
        $laundryBills->prod_name         = $request->prod_name;
        $laundryBills->quantity          = $request->quantity;
        $laundryBills->unit_price        = $request->unit_price;
        $laundryBills->total_price       = $request->total_price;
        $laundryBills->paid              = $request->paid;
        $laundryBills->due               = $request->due;
        $laundryBills->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $laundryBills->note              = $request->note;

        $laundryBills->save();

        return redirect()->route('admin.laundry.bill.show')->with('success', 'Laundry bill added successfully');
    }

    public function editLaundryBill($id)
    {
        $laundryBill = LaundryBill::findOrFail($id);
        return view('pages.expenses.iron.edit-iron-expenditure', compact('laundryBill'));
    }

    public function updateLaundryBill(Request $request, $id)
    {
        $request->validate([
            'shop_details'      => 'nullable',
            'prod_name'         => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $laundryBills = LaundryBill::findOrFail($id);

        $laundryBills->shop_details      = $request->shop_details;
        $laundryBills->prod_name         = $request->prod_name;
        $laundryBills->quantity          = $request->quantity;
        $laundryBills->unit_price        = $request->unit_price;
        $laundryBills->total_price       = $request->total_price;
        $laundryBills->paid              = $request->paid;
        $laundryBills->due               = $request->due;
        $laundryBills->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $laundryBills->note              = $request->note;

        $laundryBills->save();

        return redirect()->route('admin.laundry.bill.show')->with('success', 'Laundry bill updated successfully');
    }

    public function deleteLaundryBill($id)
    {
        $laundryBills = LaundryBill::findOrFail($id);
        $laundryBills->delete();
        return redirect()->route('admin.laundry.bill.show')->with('success', 'Laundry bill deleted successfully');
    }
}
