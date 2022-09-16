<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class RentsController extends Controller
{
    public function showRents()
    {
        $rents = Rent::orderBy('id', 'DESC')->paginate(8);
        return view('pages.expenses.rent.rent-list', compact('rents'));
    }

    public function addRent()
    {
        return view('pages.expenses.rent.add-rent');
    }
    public function storeRent(Request $request)
    {
        $request->validate([
            'rent_type'         => 'required',
            'month'             => 'required',
            'year'              => 'required',
            'rent_amount'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $rents = new Rent();

        $rents->rent_type         = $request->rent_type;
        $rents->month             = $request->month;
        $rents->year              = $request->year;
        $rents->rent_amount       = $request->rent_amount;
        $rents->paid              = $request->paid;
        $rents->due               = $request->due;
        $rents->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $rents->note              = $request->note;

        $rents->save();

        return redirect()->route('admin.rents.show')->with('success', 'Rent added successfully');
    }

    public function editRent($id)
    {
        $rent = Rent::findOrFail($id);
        return view('pages.expenses.rent.edit-rent', compact('rent'));
    }

    public function updateRent(Request $request, $id)
    {
        $request->validate([
            'rent_type'         => 'required',
            'month'             => 'nullable',
            'year'              => 'required',
            'rent_amount'       => 'required',
            'paid'              => 'required',
            'due'               => 'nullable',
            'date'              => 'nullable',
            'note'              => 'nullable',
        ]);

        $rents = Rent::findOrFail($id);

        $rents->rent_type         = $request->rent_type;
        $rents->month             = $request->month;
        $rents->year              = $request->year;
        $rents->rent_amount       = $request->rent_amount;
        $rents->paid              = $request->paid;
        $rents->due               = $request->due;
        $rents->date              = date('Y-m-d H:i:s', strtotime($request->date));
        $rents->note              = $request->note;

        $rents->save();

        return redirect()->route('admin.rents.show')->with('success', 'Rent updated successfully');
    }

    public function deleteRent($id)
    {
        $rents = Rent::findOrFail($id);
        $rents->delete();
        return redirect()->route('admin.rents.show')->with('success', 'Rent deleted successfully');
    }
}
