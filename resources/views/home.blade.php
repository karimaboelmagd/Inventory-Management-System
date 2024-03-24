@extends('layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="row"></div>

        <div class="row">

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\User::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">User</h6>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\Category::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Category</h6>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\Product::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Product</h6>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\Customer::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Customer</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\Supplier::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('suppliers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Supplier</h6>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\Product_In::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('productsIn.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Purchase</h6>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ \App\Models\product_Out::count() }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('productsOut.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Outgoing</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
