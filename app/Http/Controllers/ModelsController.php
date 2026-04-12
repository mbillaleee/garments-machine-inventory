<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Factory;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Models::latest()->paginate(10);
        $brands = Brand::where('status', 1)->get();
        return view('admin.models.index', compact('models', 'brands'));
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
            'brand_id' => 'required|exists:brands,id',
            'status' => 'required|boolean',
        ]);

        Models::create([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Model created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Models $models)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $models)
    {
        // dd($request->all(), $models);
        $models = Models::findOrFail($models);
        
        $request->validate([
            'name' => 'required|string|max:255|unique:models,name,' . $models->id,
            'brand_id' => 'required|exists:brands,id',
            'status' => 'required|boolean',
        ]);

        $models->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Model updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($models)
    {
        $models = Models::findOrFail($models);
        $models->delete();
        return redirect()->back()->with('success', 'Model deleted successfully.');

    }

    public function deleteditems()
    {
        $models = Models::onlyTrashed()->latest()->paginate(10);
        return view('admin.models.deleted_items', compact('models'));
    }

    public function restore($id)
    {
        $models = Models::onlyTrashed()->findOrFail($id);
        $models->restore();
        return redirect()->back()->with('success', 'Model restored successfully.');
    }
}
