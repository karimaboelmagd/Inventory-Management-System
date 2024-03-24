<!doctype html>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<style>
    #table-data {
        border-collapse: collapse;
        padding: 3px;
    }

    #table-data td, #table-data th {
        border: 1px solid black;
    }
</style>

<body>
<div class="invoice-box">


    <table border="0" id="table-data" width="100%">
        <tr>
            <td width="70px"><b>Invoice</b></td>
            <td width="">: ##{{ $product_out->id }}</td>
            <td width="30px"><b>Created</b></td>
            <td> {{ $product_out->date }}</td>
        </tr>

        <tr>
            <td><b>Contact</b></td>
            <td> {{ $product_out->customer->phone }}</td>
            <td><b>Address</b></td>
            <td> {{ $product_out->customer->address }}</td>
        </tr>

        <tr>
            <td><b>Customer</b></td>
            <td> {{ $product_out->customer->name }}</td>
            <td><b>Email</b></td>
            <td> {{ $product_out->customer->email }}</td>
        </tr>

        <tr>
            <td><b>Product</b></td>
            <td > {{ $product_out->product->name }}</td>
            <td><b>Quantity</b></td>
            <td > {{ $product_out->quantity }}</td>
        </tr>

    </table>

    <table border="0" width="80%">
        <tr align="right">
            <td>Best Regard</td>
        </tr>
    </table>


    <table border="0" width="80%">
        <tr align="right">
            <td></td>
        </tr>
    </table>
</div>


</body>
