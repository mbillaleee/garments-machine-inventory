<?php

namespace App\Http\Controllers;

use App\Models\NeedleType;
use Illuminate\Http\Request;

class NeedleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $perPage = request()->per_page ?? 10;
        // security: limit control
        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }
        
        $needleType = NeedleType::latest()->paginate($perPage);
        return view('admin.machines.needle_types.index', compact('needleType'));
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
            'needle_type' => 'required|string|max:255|unique:needle_types,needle_type',
            'status' => 'required|boolean',
        ]);

        NeedleType::create([
            'needle_type' => $request->needle_type,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Needle Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NeedleType $needleType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NeedleType $needleType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $needleType)
    {
        $needleType = NeedleType::findOrFail($needleType);
        $request->validate([
            'needle_type' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        

        $needleType->update([
            'needle_type' => $request->needle_type,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Needle Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($needleType)
    {
        $needleType = NeedleType::findOrFail($needleType);
        $needleType->update(['deleted_by' => auth()->id()]);
        $needleType->delete();

        return redirect()->back()->with('success', 'Needle Type deleted successfully.');
    }

    
    public function deletedItems()
    {
        $needle_types = NeedleType::onlyTrashed()->latest()->paginate(10);
        return view('admin.machines.needle_types.deleted_items', compact('needle_types'));
    }

    public function restore($id)
    {
        $item = NeedleType::onlyTrashed()->findOrFail($id);
        if (!$item) {
            return redirect()->back()->with('error', 'models not found');
        }
        $item->deleted_by = null;
        $item->save();
        $item->restore();
        return redirect()->back()->with('success', 'Model restored successfully.');
    }
}
