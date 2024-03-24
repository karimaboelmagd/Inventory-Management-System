<?php

namespace App\Http\Controllers\Supplier_controller;

use App\Http\Controllers\Controller;
use App\Imports\CustomersImport;
use App\Imports\SuppliersImport;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->get();
        return view('suppliers.index',compact('suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('suppliers.create', compact('suppliers'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $suppliers = new Supplier($request->all());
        $suppliers->save();
        return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::findorfail($id);
        return view ('suppliers.edit',compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);
        $supplier->update($validatedData);
        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Supplier::destroy($id);
        return back()->with('success', 'Supplier deleted successfully.');

    }
    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            //UPLOAD FILE
            $file = $request->file('file'); //GET FILE
            Excel::import(new SuppliersImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Data imported successfully!']);
        }

        return redirect()->back()->with(['error' => 'Please choose file before!']);
    }
}
