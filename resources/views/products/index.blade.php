
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Products</div>
                    <div class="card-body"> @if (session('status'))
                            <div class="alert alert-success"> {{ session('status') }} </div> @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody> @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>${{ $product->price }} {{ $product->unit }}</td>
                                    <td></td>
                                </tr> @endforeach </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> @endsection