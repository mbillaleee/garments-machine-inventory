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
    public function index()
    {
        $data = Machine::with(['brand', 'model', 'machineType', 'machineSummary'])->get();
        $factories = Factory::all();
        $suppliers = Supplier::all();
        $machineTypes = MachineType::all();
        $brands = Brand::all();
        $models = Models::all();
        $needleTypes = NeedleType::all();
        $locations = Location::all();
        $departments = Department::all();
        return view('admin.library.machines.index', compact('data', 'factories', 'suppliers', 'machineTypes', 'brands', 'models', 'needleTypes', 'locations', 'departments'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
    }
}
