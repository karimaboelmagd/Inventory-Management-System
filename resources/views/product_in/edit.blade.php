@extends('layouts.master')


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Purchasing Product</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{route('productsIn.update',[$product_in->id])}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">


                                <label>
                                    <select id="product_id" name="product_id">
                                        <option value="">Choose Product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </label>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product
                                        <input type="text" id="product_id" name="product_id" value="{{$product_in->id}}" class="form-control" required>

                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Supplier
                                        <input type="text" id="customer_id" name="customer_id" value="{{$product_in->Supplier->name}}" class="form-control" required>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Quantity
                                        <input type="text" id="quantity" name="quantity" value="{{$product_in->quantity}}" class="form-control" required>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Date
                                        <input type="date" id="date" name="date" value="{{$product_in->date}}" class="form-control" required>
                                    </label>
                                </div>

                            </div>



                            <br><br>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

