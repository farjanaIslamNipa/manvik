<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function allPositions()
    {
        $positions = Position::all();
        return view('pages.positions.all-positions', compact('positions'));
    }
    public function addPosition()
    {
        return view('pages.positions.add-position');
    }
    public function storePosition(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'status' => 'required',
        ]);

        $position = new Position();

        $position->position = $request->position;
        $position->status = $request->status;

        $position->save();

        return redirect()->route('admin.all.positions.show')->with('success', 'Position Added Successfully');
    }
    public function editPosition($id)
    {
        $position = Position::findOrFail($id);
        return view('pages.positions.edit-position', compact('position'));
    }
    public function updatePosition(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        $request->validate([
            'position' => 'required',
            'status' => 'required',
        ]);
        $position->position = $request->position;
        $position->status = $request->status;

        $position->save();

        return redirect()->route('admin.all.positions.show')->with('success', 'Position Updated Successfully');
    }

    public function deletePosition($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();
        return redirect()->route('admin.all.positions.show')->with('success', 'Position Deleted Successfully');
    }
}
