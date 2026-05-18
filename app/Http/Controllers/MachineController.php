<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Models\Machine;
use App\Models\Supplier;
use App\Models\MachineType;
use App\Models\Brand;
use App\Models\Models;
use App\Models\NeedleType;
use App\Models\Location;
use App\Models\Department;
use Illuminate\Http\Request;
 
class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;

        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }

        $data = Machine::with([
            'brand',
            'model',
            'machineType',
            'supplier',
            'needleType',
            'location',
            'department',
            'factory',
        ])->latest()->paginate($perPage);

        $factories = Factory::all();
        $suppliers = Supplier::all();
        $machineTypes = MachineType::all();
        $brands = Brand::all();
        $models = Models::all();
        $needleTypes = NeedleType::all();
        $locations = Location::all();
        $departments = Department::all();

        // dd($needleTypes);

        return view('admin.library.machines.index', compact(
            'data',
            'factories',
            'suppliers',
            'machineTypes',
            'brands',
            'models',
            'needleTypes',
            'locations',
            'departments'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // not used because machine creation is handled in index modals
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'machine_inventory_number' => 'required|unique:machines,machine_inventory_number',
            'serial_no' => 'nullable|string|max:255',
            'purchase_date' => 'required|date',
            'service_date' => 'nullable|date',
            'machine_type_id' => 'nullable|exists:machine_types,id',
            'brand_id' => 'nullable|exists:brands,id',
            'model_id' => 'nullable|exists:models,id',
            'reason' => 'nullable|string',
            'machine_value' => 'nullable|numeric',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'needle_type_id' => 'nullable|exists:needle_types,id',
            'depreciation' => 'nullable|integer',
            'service_frequency' => 'nullable|integer',
            'guarantee_period' => 'nullable|integer',
            'location_id' => 'nullable|exists:locations,id',
            'stitch_formation' => 'nullable|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'ownership' => 'nullable|string|max:255',
            'factory_id' => 'nullable|exists:factories,id',
        ]);

        Machine::create([
            'machine_inventory_number' => $request->machine_inventory_number,
            'serial_number' => $request->serial_no,
            'purchase_date' => $request->purchase_date,
            'service_date' => $request->service_date,
            'machine_type_id' => $request->machine_type_id,
            'brand_id' => $request->brand_id,
            'model_id' => $request->model_id,
            'reason_for_purchase' => $request->reason,
            'machine_value' => $request->machine_value,
            'supplier_id' => $request->supplier_id,
            'needle_type_id' => $request->needle_type_id ?? null,
            'depreciation' => $request->depreciation,
            'service_frequency' => $request->service_frequency,
            'guarantee_period' => $request->guarantee_period,
            'location_id' => $request->location_id,
            'stitch_formation' => $request->stitch_formation,
            'department_id' => $request->department_id,
            'ownership' => $request->ownership,
            'factory_id' => $request->factory_id,
            'status' => $request->status ?? '1',
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('admin.machines.index')->with('success', 'Machine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        // not used
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        // not used because editing is handled in index modals
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        // dd($request->all());

        $request->validate([
            'machine_inventory_number' => 'required|unique:machines,machine_inventory_number,' . $machine->id,
            'serial_no' => 'nullable|string|max:255',
            'purchase_date' => 'required|date',
            'service_date' => 'nullable|date',
            'machine_type_id' => 'nullable|exists:machine_types,id',
            'brand_id' => 'nullable|exists:brands,id',
            'model_id' => 'nullable|exists:models,id',
            'reason' => 'nullable|string',
            'machine_value' => 'nullable|numeric',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'needle_type_id' => 'nullable|exists:needle_types,id',
            'depreciation' => 'nullable|integer',
            'service_frequency' => 'nullable|integer',
            'guarantee_period' => 'nullable|integer',
            'location_id' => 'nullable|exists:locations,id',
            'stitch_formation' => 'nullable|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'ownership' => 'nullable|string|max:255',
            'factory_id' => 'nullable|exists:factories,id',
        ]);

        $machine->update([
            'machine_inventory_number' => $request->machine_inventory_number,
            'serial_number' => $request->serial_no,
            'purchase_date' => $request->purchase_date,
            'service_date' => $request->service_date,
            'machine_type_id' => $request->machine_type_id,
            'brand_id' => $request->brand_id,
            'model_id' => $request->model_id,
            'reason_for_purchase' => $request->reason,
            'machine_value' => $request->machine_value,
            'supplier_id' => $request->supplier_id,
            'needle_type_id' => $request->needle_type_id ?? null,
            'depreciation' => $request->depreciation,
            'service_frequency' => $request->service_frequency,
            'guarantee_period' => $request->guarantee_period,
            'location_id' => $request->location_id,
            'stitch_formation' => $request->stitch_formation,
            'department_id' => $request->department_id,
            'ownership' => $request->ownership,
            'factory_id' => $request->factory_id,
            'status' => $request->status ?? $machine->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('admin.machines.index')->with('success', 'Machine updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        $machine->update(['deleted_by' => auth()->id()]);
        $machine->delete();

        return redirect()->back()->with('success', 'Machine deleted successfully.');
    }

    public function deletedItems(Request $request)
    {
        $perPage = $request->per_page ?? 10;

        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }

        $data = Machine::onlyTrashed()
            ->with([
                'brand',
                'model',
                'machineType',
                'supplier',
                'needleType',
                'location',
                'department',
                'factory',
            ])
            ->latest('deleted_at')
            ->paginate($perPage);

        return view('admin.library.machines.deleted', compact('data'));
    }

    public function restore($id)
    {
        $machine = Machine::onlyTrashed()->where('id', $id)->firstOrFail();
        $machine->deleted_by = null;
        $machine->restore();

        return redirect()->route('admin.machines.deleteditems')->with('success', 'Machine restored successfully.');
    }
}
