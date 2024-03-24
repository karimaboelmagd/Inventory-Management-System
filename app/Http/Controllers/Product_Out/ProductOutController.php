<?php

namespace App\Http\Controllers\Product_Out;

use App\Http\Controllers\Controller;
use App\Models\Product_Out;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductOutController extends Controller
{
    public function export($id)
    {
        $product_out = Product_Out::findOrFail($id);
        $pdf = PDF::loadView('product_out.productoutPDF', compact('product_out'));
        return $pdf->download($product_out->id.'_product_out.pdf');
    }
}
