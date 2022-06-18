@extends('layouts.layout')

@section('content')
<div class="container p-3">
    <div class="row d-flex justify-content-between">
        <p class="m-0 p-0" style="font-weight: 600; font-size: 20px;">Users - {{ count($users) }}</p>
        <div class="btn btn-primary"><a href="/users/create" class="text-white">Add new</a></div>
    </div>
</div>
<div class="card">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="col">{{ $user->id }}</th>
                    <td scope="col">{{ $user->name }}</td>
                    <td scope="col">{{ $user->email }}</td>
                    <td scope="col">{{ $user->created_at }}</td>
                    <td scope="col">
                        <div class="row flex-wrap pr-3">
                            <div class="btn btn-warning btn-sm ml-1">Edit</div>
                            <form action="/users/{{ $user->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-1">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop