<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
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

        $data = Location::with('factory')->latest()->paginate($perPage);
        return view('admin.library.locations.index', compact('data'));
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
        // dd($request->all());

        $request->validate([
            'location_name' => 'required|string|max:255',
            'location_type' => 'required|string|max:255',
            'factory_id' => 'required|exists:factories,id',
            'sort_sequence' => 'required|integer|min:0',
            'status' => 'required|in:0,1',
        ]);

        Location::create([
            'location_name' => $request->location_name, // এখানে change
            'location_type' => $request->location_type,
            'factory_id' => $request->factory_id,
            'sort_sequence' => $request->sort_sequence,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('admin.locations.index')->with('success', 'Location created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'location_name' => 'required|string|max:255',
            'location_type' => 'required|string|max:255',
            'factory_id' => 'required|exists:factories,id',
            'sort_sequence' => 'required|integer|min:0',
            'status' => 'required|in:0,1',
        ]);

        $location->update([
            'location_name' => $request->location_name, // এখানে change
            'location_type' => $request->location_type,
            'factory_id' => $request->factory_id,
            'sort_sequence' => $request->sort_sequence,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('admin.locations.index')->with('success', 'Location updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->update(['deleted_by' => auth()->id()]);
        $location->delete();
        return redirect()->route('admin.locations.index')->with('success', 'Location deleted successfully.');
    }

    public function deletedItems()
    {
        $data = Location::onlyTrashed()->with('factory')->latest()->paginate(10);
        return view('admin.library.locations.deleted_items', compact('data'));
    }

    public function restore($id)
    {
        $location = Location::onlyTrashed()->findOrFail($id);
        $location->restore();
        return redirect()->route('admin.locations.deleteditems')->with('success', 'Location restored successfully.');
    }
}
