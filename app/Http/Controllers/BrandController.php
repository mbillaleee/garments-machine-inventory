<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;

        // security: limit control
        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }

        $brands = Brand::latest()->paginate($perPage);

        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function deletedItems()
    {
        $brands = Brand::onlyTrashed()->get();
        return view('admin.brand.deleted_items', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:brands,name',
            'status' => 'required|in:1,0',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->added_by = auth()->id();
        $brand->save();

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|unique:brands,name,' . $brand->id,
            'status' => 'required|in:1,0',
        ]);

        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->updated_by = auth()->id();
        $brand->save();

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->update(['deleted_by' => auth()->id()]);
        $brand->delete(); // এখন soft delete হবে
        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }

    public function restore($id)
    {
        $brand = Brand::onlyTrashed()->where('id', $id)->firstOrFail();
        $brand->deleted_by = null; // Restore করার সময় deleted_by ফিল্ডটি null করে দিন
        $brand->restore();
        return redirect()->route('admin.brands.deleteditems')->with('success', 'Brand restored successfully.');
    }
}
