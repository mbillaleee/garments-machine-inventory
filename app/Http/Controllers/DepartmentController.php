<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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

        $data = Department::with('factory')->latest()->paginate($perPage);
        return view('admin.library.departments.index', compact('data'));
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
            'department_name' => 'required|string|max:255',
            'factory_id' => 'required|exists:factories,id',
            'status' => 'required|in:0,1',
        ]);

        Department::create([
            'department_name' => $request->department_name,
            'factory_id' => $request->factory_id,
            'status' => $request->status,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('admin.departments.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required|string|max:255',
            'factory_id' => 'required|exists:factories,id',
            'status' => 'required|in:0,1',
        ]);

        $department->update([
            'department_name' => $request->department_name,
            'factory_id' => $request->factory_id,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('admin.departments.index')->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->update([
            'deleted_by' => auth()->id(),
        ]);

        $department->delete();

        return redirect()->route('admin.departments.index')->with('success', 'Department deleted successfully.');
    }

    public function deletedItems()
    {
        $perPage = request()->per_page ?? 10;
        // security: limit control
        if (!in_array($perPage, [10, 50, 100, 500])) {
            $perPage = 10;
        }

        $data = Department::onlyTrashed()->with('factory')->latest()->paginate($perPage);
        return view('admin.library.departments.deleted', compact('data'));
    }

    public function restore($id)
    {
        $department = Department::onlyTrashed()->findOrFail($id);
        $department->restore();
        return redirect()->route('admin.departments.index')->with('success', 'Department restored successfully.');
    }
}
