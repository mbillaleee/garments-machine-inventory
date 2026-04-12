<?php

namespace App\Http\Controllers;

use App\Models\MachineType;
use Illuminate\Http\Request;

class MachineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machineTypes = MachineType::latest()->paginate(10);
        return view('admin.machine_types.index', compact('machineTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:sewing,non_sewing',
            'status' => 'required|boolean',
        ]);

        MachineType::create([
            'name' => $request->name,
            'category' => $request->category,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Machine Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MachineType $machineType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MachineType $machineType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MachineType $machineType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:sewing,non_sewing',
            'status' => 'required|boolean',
        ]);

        $machineType->update([
            'name' => $request->name,
            'category' => $request->category,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Machine Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MachineType $machineType)
    {
        $machineType->delete();
        return redirect()->back()->with('success', 'Machine Type deleted successfully.');
    }

    public function deletedItems()
    {
        $machineTypes = MachineType::onlyTrashed()->latest()->paginate(10);
        return view('admin.machine_types.deleted_items', compact('machineTypes'));
    }

    public function restore($id)
    {
        $machineType = MachineType::onlyTrashed()->findOrFail($id);
        $machineType->restore();
        return redirect()->back()->with('success', 'Machine Type restored successfully.');
    }
}
