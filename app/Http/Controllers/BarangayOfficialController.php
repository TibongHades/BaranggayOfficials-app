<?php
namespace App\Http\Controllers;

use App\Models\BarangayOfficial;
use App\Models\Position;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BarangayOfficialController extends Controller
{
    public function index()
    {
        $officials = BarangayOfficial::with('position')->get();
    
        return inertia('BarangayOfficials/Index', [
            'officials' => $officials
        ]);
    }

    public function logs()
    { 
        return inertia('BarangayOfficials/Logs');
    }

    public function reports()
    {

    
        return inertia('BarangayOfficials/Reports');
    }
    
    public function show(BarangayOfficial $barangayOfficial) {
        $positions = Position::all();
        return inertia('BarangayOfficials/Show', [
            'barangayOfficial' => $barangayOfficial->load('position'),
            'positions' => $positions
        ]);
    }
    
    

    public function create()
    {
        $positions = Position::all();
        return Inertia::render('BarangayOfficials/Create', [
            'positions' => $positions
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_id' => 'required|exists:positions,id',
            'age' => 'required|integer|min:0',
            'address' => 'required|string|max:255'
        ]);

        BarangayOfficial::create($request->all());

        return redirect('/barangay-officials')->with('success', 'Barangay Official created successfully.');
    }

    public function edit(BarangayOfficial $barangayOfficial)
    {
        $positions = Position::all();
        return inertia('BarangayOfficials/Show', [
            'barangayOfficial' => $barangayOfficial->load('position'),
            'positions' => $positions
        ]);
    }


    public function update(Request $request, BarangayOfficial $barangayOfficial)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'position_id' => 'required|',
            'age' => 'required',
            'address' => 'required'
        ]);

        $barangayOfficial->update($validatedData);

        return redirect()->route('barangay-officials.show', $barangayOfficial->id)
                         ->with('success', 'Barangay Official updated successfully.');
    }

    public function destroy(BarangayOfficial $barangayOfficial)
    {
        $barangayOfficial->delete();
        return redirect('/barangay-officials')->with('message', 'Barangay Official deleted successfully.');

    }
}
