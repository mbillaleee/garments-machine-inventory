<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factory $factory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factory $factory)
    {
        //
    }


    public function switch(Request $request)
    {
        $request->validate([
            'factory_id' => 'nullable|exists:factories,id'
        ]);

        if ($request->factory_id) {
            // চেক করুন ইউজার এই ফ্যাক্টরিতে অ্যাক্সেস আছে কি না
            if (!auth()->user()->canAccessFactory($request->factory_id)) {
                abort(403);
            }

            session(['current_factory_id' => $request->factory_id]);
            session(['current_factory_name' => Factory::find($request->factory_id)->name]);
        } else {
            // TEAM GROUP (All) মোড
            session()->forget(['current_factory_id', 'current_factory_name']);
        }

        return redirect()->back();   // অথবা dashboard এ redirect
    }
}
