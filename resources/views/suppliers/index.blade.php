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
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Suppliers</h3>
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

                    <a href="{{route('suppliers.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Supplier</a>
                    {{--                        <a href="{{ route('exportPDF.AllCategories') }}" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</a>--}}
                    {{--                        <a href="{{ route('exportexcel.AllCategories') }}" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel</a>--}}
                    <br><br>



                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Processes</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->email}}</td>
                                <td>{{$supplier->address}}</td>
                                <td>{{$supplier->phone}}</td>
                                <td>
                                    <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_category{{$supplier->id}}">Delete</button>
                                </td>

                            </tr>
                        @include('suppliers.destroy')
                        @endforeach

                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('suppliers.form_import')

@endsection
