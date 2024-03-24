<?php

namespace App\Http\Controllers\Category_Controller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('categories.ExportPDFallCategories',compact('categories'));
        return $pdf->download('Categories.pdf');
    }
}


