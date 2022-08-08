<?php

namespace App\Http\Controllers;

use App\Models\Fabrics;
use App\Models\FabricType;
use Illuminate\Http\Request;

class FabricsController extends Controller
{
    public function showFabricsExpenditure()
    {
        return view('pages.expenses.fabrics.fabrics-expenditure-list');
    }

    public function addFabricsExpenditure()
    {
        $fabricTypes = FabricType::all();
        return view('pages.expenses.fabrics.add-fabrics-expenditure', compact('fabricTypes'));
    }
    public function storeFabricsExpenditure(Request $request)
    {
        $request->validate([
            'shop_details'  => 'nullable',
            'fabrics_name'  => 'required',
            'quantity'      => 'required',
            'unit_price'    => 'required',
            'total_price'   => 'required',
            'paid'          => 'required',
            'due'           => 'nullable',
            'date'          => 'required',
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
        $fabrics->date = $request->date;
        $fabrics->note = $request->note;

        $fabrics->save();

        return redirect()->route('admin.show.fabrics.expenditure')->with('success', 'Fabrics expenditure added successfully');
    }

    public function edit(Fabrics $fabrics)
    {
        //
    }

    public function update(Request $request, Fabrics $fabrics)
    {
        //
    }

    public function destroy(Fabrics $fabrics)
    {
        //
    }
}
