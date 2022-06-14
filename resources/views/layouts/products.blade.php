@extends('layouts.layout')

@section('content')
<div class="container p-3">
    <div class="row d-flex justify-content-between">
        <p class="m-0 p-0" style="font-weight: 600; font-size: 20px;">Products - {{ count($products) }}</p>
        <div class="btn btn-primary"><a href="/products/create" class="text-white">Add new</a></div>
    </div>
</div>
<div class="card">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Barcode</th>
                <th scope="col">Buy</th>
                <th scope="col">Sale</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="col">{{ $product->id }}</th>
                    <td scope="col">{{ $product->name }}</td>
                    <td scope="col">{{ $product->barcode }}</td>
                    <td scope="col">{{ $product->buy }}</td>
                    <td scope="col">{{ $product->sale }}</td>
                    <td scope="col">{{ $product->quantity }}</td>
                    <td scope="col">
                        <div class="row flex-wrap  pr-3">
                            <div class="btn btn-success btn-sm ml-1">View</div>
                            <div class="btn btn-warning btn-sm ml-1">Edit</div>
                            <div class="btn btn-danger btn-sm ml-1">Delete</div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop