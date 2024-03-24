@extends('layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Purchasing List</h3>
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

                @if(session()->has('delete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{\session()->get('delete')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{route('productsIn.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add New Purchase</a>
                {{--                        <a href="{{ route('exportPDF.AllCategories') }}" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</a>--}}
                {{--                        <a href="{{ route('exportexcel.AllCategories') }}" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel</a>--}}
                <br><br>



                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Processes</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoice_data as $i)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$i->product->name}}</td>
                            <td>{{$i->supplier->name}}</td>
                            <td>{{$i->quantity}}</td>
                            <td>{{$i->date}}</td>
                            <td>
                                <a href="{{route('productsIn.edit',$i->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_category{{$i->id}}">Delete</button>
                            </td>
                        </tr>
                    @include('product_out.destroy')
                    @endforeach

                </table>
            </div>

            <div class="card-header">
                <h3 class="card-title">Export Invoice</h3>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Processes</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoice_data as $i)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$i->product->name}}</td>
                            <td>{{$i->supplier->name}}</td>
                            <td>{{$i->quantity}}</td>
                            <td>{{$i->date}}</td>
                            <td>
                                <a href="{{route('exportPDF.productsIn',$i->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Export Invoice</a>
                            </td>

                        </tr>
                    @include('product_in.destroy')
                    @endforeach

                </table>
            </div>
            <!-- /.card -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection
