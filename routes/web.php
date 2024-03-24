<?php

use App\Http\Controllers\Category_Controller\CategoryController;
use App\Http\Controllers\Category_Controller\ExcelExportController;
use App\Http\Controllers\Category_Controller\PDFController;
use App\Http\Controllers\Customer_Controller\CustomerController;
use App\Http\Controllers\Product_Controller\ProductController;
use App\Http\Controllers\Product_In\ProductInController;
use App\Http\Controllers\Product_In\PurchasingingProController;
use App\Http\Controllers\Product_Out\OutgoingProController;
use App\Http\Controllers\Product_Out\ProductOutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Supplier_Controller\SupplierController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function() {
    return view ('home');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () {

    Route::resource('categories', CategoryController::class);
    Route::get('generate-pdf',[PDFController::class, 'generatePDF'])->name('exportPDF.AllCategories');
    Route::get('/export-excel', [ExcelExportController::class, 'export'])->name('exportexcel.AllCategories');

    Route::resource('products', ProductController::class);

    Route::resource('customers', CustomerController::class);
    Route::post('/importCustomers', [CustomerController::class,'import'])->name('import.customers');

    Route::resource('suppliers', SupplierController::class);
    Route::post('/importSuppliers', [SupplierController::class,'import'])->name('import.suppliers');


    Route::resource('productsOut', OutgoingProController::class);
    Route::get('/exportProductout/{id}', [ProductOutController::class,'export'])->name('exportPDF.productOut');


    Route::resource('productsIn', PurchasingingProController::class);
    Route::get('/exportProductin/{id}', [ProductInController::class,'export'])->name('exportPDF.productsIn');

    Route::resource('user', UserController::class);


});





