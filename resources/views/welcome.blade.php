@extends('layouts.layout')

@section('content')
    <h4 class="my-3">Dashboard</h4>
    <div class="row d-flex justify-content-center">
        <div class="col card m-1 bg-dark text-light">
            <div class="card-header">
                Products
            </div>
            <div class="card-body text-center"><h4>{{ count($products) }}</h4></div>
        </div>
        <div class="col card m-1 bg-warning text-light">
            <div class="card-header">
                Customers
            </div>
            <div class="card-body text-center"><h4>{{ count($customers) }}</h4></div>
        </div>
        <div class="col card m-1 bg-primary text-light">
            <div class="card-header">
                Sales
            </div>
            <div class="card-body text-center"><h4>0</h4></div>
        </div>
        <div class="col card m-1 bg-success text-light">
            <div class="card-header">
                Incomes
            </div>
            <div class="card-body text-center"><h4>0</h4></div>
        </div>
    </div>
@endsection