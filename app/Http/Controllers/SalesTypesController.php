<?php

namespace App\Http\Controllers;

use App\Models\SalesType;
use Illuminate\Http\Request;

class SalesTypesController extends Controller
{
    public function showSalesType()
    {
        $sales_types = SalesType::all();
        return view('pages.others.sales-types.sales-types-list', compact('sales_types'));
    }
    public function addSalesType()
    {
        return view('pages.others.sales-types.add-sales-type');
    }
    public function storeSalesType(Request $request)
    {
        $request->validate([
            'sales_type' => 'required',
            'status' => 'required',
        ]);

        $sales_type = new SalesType();

        $sales_type->sales_type = $request->sales_type;
        $sales_type->status = $request->status;

        $sales_type->save();

        return redirect()->route('admin.salesType.show')->with('success', 'Sales Type Added Successfully');
    }
    public function editSalesType($id)
    {
        $sales_type = SalesType::findOrFail($id);
        return view('pages.others.sales-types.edit-sales-type', compact('sales_type'));
    }
    public function updateSalesType(Request $request, $id)
    {
        $sales_type = SalesType::findOrFail($id);
        $request->validate([
            'sales_type' => 'required',
            'status' => 'required',
        ]);
        $sales_type->sales_type = $request->sales_type;
        $sales_type->status = $request->status;

        $sales_type->save();

        return redirect()->route('admin.salesType.show')->with('success', 'Sales Type Updated Successfully');
    }

    public function deleteSalesType($id)
    {
        $sales_type = SalesType::findOrFail($id);
        $sales_type->delete();
        return redirect()->route('admin.salesType.show')->with('success', 'Deleted Successfully');
    }
}
