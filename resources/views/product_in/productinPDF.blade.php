<!doctype html>
<html>
<head>
    <meta charset="utf-8">
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
            <td width="">## {{ $product_in->id }}</td>
            <td width="30px"><b>Created</b></td>
            <td> {{ $product_in->date }}</td>
        </tr>

        <tr>
            <td><b>Contact</b></td>
            <td> {{ $product_in->supplier->phone }}</td>
            <td><b>Address</b></td>
            <td> {{ $product_in->supplier->address }}</td>
        </tr>

        <tr>
            <td><b>Supplier</b></td>
            <td> {{ $product_in->supplier->name }}</td>
            <td><b>Email</b></td>
            <td> {{ $product_in->supplier->email }}</td>
        </tr>

        <tr>
            <td><b>Product</b></td>
            <td > {{ $product_in->product->name }}</td>
            <td><b>Quantity</b></td>
            <td > {{ $product_in->quantity }}</td>
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
