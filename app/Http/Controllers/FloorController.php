<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
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
        $data = Floor::with('factory')->latest()->paginate($perPage);
        return view('admin.library.floors.index', compact('data'));
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
            'floor_name' => 'required|string|max:255|unique:floors,floor_name',
            'sort_sequence' => 'required|integer',
        ]);

        $floor = new Floor();
        $floor->factory_id = $request->factory_id;
        $floor->floor_name = $request->floor_name;
        $floor->sort_sequence = $request->sort_sequence;
        $floor->added_by = auth()->id();
        $floor->save();

        return redirect()->route('admin.floors.index')->with('success', 'Floor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Floor $floor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Floor $floor)
    {
        $request->validate([
            'floor_name' => 'required|string|max:255|unique:floors,floor_name,' . $floor->id,
            'sort_sequence' => 'required|integer',
        ]);

        $floor->floor_name = $request->floor_name;
        $floor->sort_sequence = $request->sort_sequence;
        $floor->factory_id = $request->factory_id;
        $floor->updated_by = auth()->id();
        $floor->save();

        return redirect()->route('admin.floors.index')->with('success', 'Floor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Floor $floor)
    {
        $floor->update(['deleted_by' => auth()->id()]);
        $floor->delete();

        return redirect()->route('admin.floors.index')->with('success', 'Floor deleted successfully.');
    }


    public function deletedItems()
    {
        $perPage = request()->per_page ?? 10;
        // security: limit control
        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }
        $data = Floor::onlyTrashed()->with('factory')->latest()->paginate($perPage);
        return view('admin.library.floors.deleted', compact('data'));
    }


    public function restore($id)
    {

        $floor = Floor::onlyTrashed()->findOrFail($id);
        $floor->update(['deleted_by' => null, 'deleted_at' => null]);
        $floor->restore();

        return redirect()->route('admin.floors.deleteditems')->with('success', 'Floor restored successfully.');
    }
}
