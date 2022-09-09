<?php

namespace App\Http\Controllers;

use App\Models\Fabrics;
use App\Models\FabricType;
use Illuminate\Http\Request;

class FabricsController extends Controller
{
    public function showFabricsExpenditure()
    {
        $fabrics = Fabrics::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.fabrics.fabrics-expenditure-list', compact('fabrics'));
    }

    public function addFabricsExpenditure()
    {
        $fabricTypes = FabricType::where('status', 1)->get();
        return view('pages.expenses.fabrics.add-fabrics-expenditure', compact('fabricTypes'));
    }
    public function storeFabricsExpenditure(Request $request)
    {
        $request->validate([
            'shop_details'  => 'nullable',
            'fabrics_name'  => 'required',
            'quantity'      => 'required|numeric',
            'unit_price'    => 'required',
            'total_price'   => 'required',
            'paid'          => 'required',
            'due'           => 'nullable',
            'date'          => 'nullable',
            'note'          => 'nullable',
        ]);

        $fabrics = new Fabrics();

        $fabrics->shop_details = $request->shop_details;
        $fabrics->fabrics_name = $request->fabrics_name;
        $fabrics->quantity = $request->quantity;
        $fabrics->unit_price = $request->unit_price;
        $fabrics->total_price = $request->total_price;
        $fabrics->paid = $request->paid;
        $fabrics->due = $request->due;
        $fabrics->date = date('Y-m-d H:i:s', strtotime($request->date));
        $fabrics->note = $request->note;

        $fabrics->save();

        return redirect()->route('admin.fabrics.expenditure.show')->with('success', 'Fabrics expenditure added successfully');
    }

    public function editFabricsExpenditure($id)
    {
        $fabric = Fabrics::findOrFail($id);
        $fabricTypes = FabricType::where('status', 1)->get();
        return view('pages.expenses.fabrics.edit-fabrics-expenditure', compact('fabricTypes', 'fabric'));
    }

    public function updateFabricsExpenditure(Request $request, $id)
    {
        $request->validate([
            'shop_details'  => 'nullable',
            'fabrics_name'  => 'required',
            'quantity'      => 'required|numeric',
            'unit_price'    => 'required',
            'total_price'   => 'required',
            'paid'          => 'required',
            'due'           => 'nullable',
            'date'          => 'nullable',
            'note'          => 'nullable',
        ]);

        $fabrics = Fabrics::findOrFail($id);

        $fabrics->shop_details = $request->shop_details;
        $fabrics->fabrics_name = $request->fabrics_name;
        $fabrics->quantity = $request->quantity;
        $fabrics->unit_price = $request->unit_price;
        $fabrics->total_price = $request->total_price;
        $fabrics->paid = $request->paid;
        $fabrics->due = $request->due;
        $fabrics->date = date('Y-m-d H:i:s', strtotime($request->date));
        $fabrics->note = $request->note;

        $fabrics->save();

        return redirect()->route('admin.fabrics.expenditure.show')->with('success', 'Fabrics expenditure updated successfully');
    }

    public function deleteFabricsExpenditure($id)
    {
        $fabrics = Fabrics::findOrFail($id);
        $fabrics->delete();
        return redirect()->route('admin.fabrics.expenditure.show')->with('success', 'Fabrics expenditure deleted successfully');
    }
}
