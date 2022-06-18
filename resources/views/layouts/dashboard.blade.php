@extends('layouts.layout')

@section('content')
<div class="container p-3">
    <div class="row d-flex justify-content-between">
        <p class="m-0 p-0" style="font-weight: 600; font-size: 20px;">Dashboard</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col card bg-warning m-1">
            <div class="card-body text-center" style="font-size: x-large;">
                <b>{{ count($products) }}</b>
            </div>
            <div class="card-footer">
                Products
            </div>
        </div>

        <div class="col card bg-teal m-1">
            <div class="card-body text-center" style="font-size: x-large;">
                <b>{{ count($customers) }}</b>
            </div>
            <div class="card-footer">
                Customers
            </div>
        </div>

        <div class="col card bg-dark m-1">
            <div class="card-body text-center" style="font-size: x-large;">
                <b>{{ count($users) }}</b>
            </div>
            <div class="card-footer">
                Users
            </div>
        </div>

        <div class="col card bg-danger m-1">
            <div class="card-body text-center" style="font-size: x-large;">
                <b>{{ count($users) }}</b>
            </div>
            <div class="card-footer">
                Sales
            </div>
        </div>
    </div>
</div>
@stop