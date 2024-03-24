<?php

namespace App\Http\Controllers\Product_Out;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Product_Out;
use Illuminate\Http\Request;

class OutgoingProController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $customers = Customer::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $invoice_data = Product_Out::all();
        return view('product_out.index', compact('products','customers', 'invoice_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $customers= Customer::all();
        $invoice_data = Product_Out::all();
        return view('product_out.create', compact('invoice_data','products','customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_id'     => 'required',
            'customer_id'    => 'required',
            'quantity'       => 'required',
            'date'           => 'required'
        ]);

        Product_Out::create($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->quantity -= $request->quantity;
        $product->save();
        return redirect()->route('productsOut.index')->with('success', 'Product created successfully.');

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
        $product_out = Product_Out::find($id);
        $products = Product::all();
        $customers= Customer::all();
        return view('product_out.edit',compact('product_out', 'products', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate([
            'product_id'     => 'required',
            'customer_id'    => 'required',
            'quantity'       => 'required',
            'date'           => 'required'
        ]);

        $product_out = Product_Out::findorfail($id);
        $product_out->update($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->quantity -= $request->quantity;
        $product->update();
        return redirect()->route('productsOut.index')->with('success', 'Product Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Product_Out::destroy($id);
        return back()->with('success', 'Product deleted successfully.');
    }


}
