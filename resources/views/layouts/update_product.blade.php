@extends('layouts.layout')

@section('content')
<div class="container p-3">
    <div class="row d-flex justify-content-between">
        <p class="m-0 p-0" style="font-weight: 600; font-size: 20px;">Update products</p>
    </div>
</div>
<div class="card p-3">
    <form action="/products/update/{{ $product->id }}" method="get">
        @csrf
        <div class="form-group mb-3">
            <label for="productID" class="form-label">ID</label>
            <input type="text" disabled class="form-control" id="productID" placeholder="0" name="id" value="{{ $product->id }}">
        </div>
        <div class="form-group mb-3">
            <label for="productName" class="form-label">Product name</label>
            <input type="text" class="form-control" id="productName" placeholder="product name" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group mb-3">
            <label for="barcode" class="form-label">Barcode</label>
            <input type="text" class="form-control" id="barcode" placeholder="1234567890" name="barcode" value="{{ $product->barcode }}">
        </div>
        <div class="row">
            <div class="form-group mb-3 col">
                <label for="buy" class="form-label">Buy</label>
                <input type="number" class="form-control" id="buy" placeholder="16" name="buy" value="{{ $product->buy }}">
            </div>
            <div class="form-group mb-3 col">
                <label for="sale" class="form-label">Sale</label>
                <input type="number" class="form-control" id="sale" placeholder="20" name="sale" value="{{ $product->sale }}">
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" placeholder="1" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="row p-2 mx-3">
            <button type="submit" class="btn btn-warning col" value="upload">Update</button>
        </div>
    </form>
</div>
@stop