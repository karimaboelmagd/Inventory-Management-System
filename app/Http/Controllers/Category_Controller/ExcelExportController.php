<?php

namespace App\Http\Controllers\Category_Controller;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;

class ExcelExportController extends Controller
{
    public function export()
    {
        return (new CategoryExport())->download('Categories.xlsx');
    }
}
