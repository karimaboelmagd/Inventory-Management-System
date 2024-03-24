<?php

namespace App\Http\Controllers\Product_In;

use App\Http\Controllers\Controller;
use App\Models\Product_In;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductInController extends Controller
{
    public function export($id)
    {
        $product_in = Product_In::findOrFail($id);
        $pdf = PDF::loadView('product_in.productinPDF', compact('product_in'));
        return $pdf->download($product_in->id.'_product_enter.pdf');
    }
}
