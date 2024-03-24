<?php

namespace App\Http\Controllers\Customer_Controller;

use App\Http\Controllers\Controller;
use App\Imports\CustomersImport;
use App\Models\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('customers.create', compact('customers'));
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
        $customers = new Customer($request->all());
        $customers->save();
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
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
    public function edit($id)
    {
        $customer = Customer::findorfail($id);
        return view ('customers.edit',compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);
        $customer->update($validatedData);
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return back()->with('success', 'Customer deleted successfully.');


    }

    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            //UPLOAD FILE
            $file = $request->file('file'); //GET FILE
            Excel::import(new CustomersImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Data imported successfully!']);
        }

        return redirect()->back()->with(['error' => 'Please choose file before!']);
    }



}
