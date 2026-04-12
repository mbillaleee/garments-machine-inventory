<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10);
        return view('admin.generel.suppliers.index', compact('suppliers'));
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
            'supplier_name' => 'required|string|max:255',
            'supplier_description' => 'nullable|string',
            'supplier_country' => 'required|string|max:255',
            'supplier_address' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        Supplier::create([
            'supplier_name' => $request->supplier_name,
            'supplier_description' => $request->supplier_description,
            'supplier_country' => $request->supplier_country,
            'supplier_address' => $request->supplier_address,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Supplier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
         $request->validate([
            'supplier_name' => 'required|string|max:255',
            'supplier_description' => 'nullable|string',
            'supplier_country' => 'required|string|max:255',
            'supplier_address' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_description = $request->supplier_description;
        $supplier->supplier_country = $request->supplier_country;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->status = $request->status;
        $supplier->updated_by = auth()->id();
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->update(['deleted_by' => auth()->id()]);
        $supplier->delete(); // এখন soft delete হবে
        return redirect()->back()->with('success', 'Supplier deleted successfully.');
    }

    public function deletedItems()
    {
        $suppliers = Supplier::onlyTrashed()->latest()->paginate(10);
        return view('admin.generel.suppliers.deleted_items', compact('suppliers'));
    }

    public function restore($id)
    {
        
        $supplier = Supplier::onlyTrashed()->where('id', $id)->firstOrFail();

        if (!$supplier) {
            return redirect()->back()->with('error', 'Supplier not found');
        }
        $supplier->deleted_by = null;
        $supplier->save();
        $supplier->restore();

        return redirect()->back()->with('success', 'Supplier restored successfully.');
    }
}
