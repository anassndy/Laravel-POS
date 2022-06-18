@extends('layouts.layout')

@section('content')
<div class="container p-3">
    <div class="row d-flex justify-content-between">
        <p class="m-0 p-0" style="font-weight: 600; font-size: 20px;">Product details</p>
    </div>
</div>
<div class="card">
    <table class="table table-hover">
        <tbody>
            <tr>
                <td scope="col">ID</td>
                <th scope="col">{{ $product->id }}</th>
            </tr>
            <tr>
                <td scope="col">Name</td>
                <th scope="col">{{ $product->name }}</th>
            </tr>
            <tr>
                <td scope="col">Barcode</td>
                <th scope="col">{{ $product->barcode }}</th>
            </tr>
            <tr>
                <td scope="col">Buy</td>
                <th scope="col">{{ $product->buy }}</th>
            </tr>
            <tr>
                <td scope="col">Sale</td>
                <th scope="col">{{ $product->sale }}</th>
            </tr>
            <tr>
                <td scope="col">Quantity</td>
                <th scope="col">{{ $product->quantity }}</th>
            </tr>
        </tbody>
    </table>
</div>
@stop