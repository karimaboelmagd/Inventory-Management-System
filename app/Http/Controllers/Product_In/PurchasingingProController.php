<?php

namespace App\Http\Controllers\Product_In;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_In;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchasingingProController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $suppliers = Supplier::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $invoice_data = Product_In::all();
        return view('product_in.index', compact('products','suppliers','invoice_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $suppliers= Supplier::all();
        $invoice_data = Product_In::all();
        return view('product_in.create', compact('invoice_data','products','suppliers'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'     => 'required',
            'supplier_id'    => 'required',
            'quantity'       => 'required',
            'date'           => 'required'
        ]);
        Product_In::create($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->quantity += $request->quantity;
        $product->save();
        return redirect()->route('productsIn.index')->with('success', 'Purchase created successfully.');

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
        $product_in = Product_In::find($id);
        $products = Product::all();
        $Suppliers= Supplier::all();
        return view('product_in.edit',compact('product_in', 'products', 'Suppliers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id'     => 'required',
            'supplier_id'    => 'required',
            'quantity'       => 'required',
            'date'           => 'required'
        ]);

        $product_in = Product_In::findOrFail($id);
        $product_in->update($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->quantity += $request->quantity;
        $product->update();
        return redirect()->route('productsIn.index')->with('success', 'Purchase Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product_In::destroy($id);
        return back()->with('success', 'Purchase deleted successfully.');
    }
}
