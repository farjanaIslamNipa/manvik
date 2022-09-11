<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    public function showSuppliers()
    {
        $suppliers = Supplier::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.suppliers.suppliers-list', compact('suppliers'));
    }

    public function addSupplier()
    {
        return view('pages.expenses.suppliers.add-suppliers');
    }
    public function storeSupplier(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'email'             => 'nullable',
            'phone'             => 'required',
            'prod_name'         => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $suppliers = new Supplier();

        $suppliers->name              = $request->name;
        $suppliers->email             = $request->email;
        $suppliers->phone             = $request->phone;
        $suppliers->prod_name         = $request->prod_name;
        $suppliers->quantity          = $request->quantity;
        $suppliers->unit_price        = $request->unit_price;
        $suppliers->total_price       = $request->total_price;
        $suppliers->paid              = $request->paid;
        $suppliers->due               = $request->due;
        $suppliers->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $suppliers->note              = $request->note;

        $suppliers->save();

        return redirect()->route('admin.suppliers.show')->with('success', 'Supplier added successfully');
    }

    public function editSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('pages.expenses.suppliers.edit-suppliers', compact('supplier'));
    }

    public function updateSupplier(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required',
            'email'             => 'nullable',
            'phone'             => 'required',
            'prod_name'         => 'required',
            'quantity'          => 'required|numeric',
            'unit_price'        => 'required',
            'total_price'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $suppliers = Supplier::findOrFail($id);

        $suppliers->name              = $request->name;
        $suppliers->email             = $request->email;
        $suppliers->phone             = $request->phone;
        $suppliers->prod_name         = $request->prod_name;
        $suppliers->quantity          = $request->quantity;
        $suppliers->unit_price        = $request->unit_price;
        $suppliers->total_price       = $request->total_price;
        $suppliers->paid              = $request->paid;
        $suppliers->due               = $request->due;
        $suppliers->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $suppliers->note              = $request->note;

        $suppliers->save();

        return redirect()->route('admin.suppliers.show')->with('success', 'Suppliers updated successfully');
    }

    public function deleteSupplier($id)
    {
        $suppliers = Supplier::findOrFail($id);
        $suppliers->delete();
        return redirect()->route('admin.suppliers.show')->with('success', 'Suppliers deleted successfully');
    }
}
