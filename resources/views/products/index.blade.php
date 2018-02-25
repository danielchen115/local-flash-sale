
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div style="font-size: 30px" class="card-header"><b>All Products</b></div>
                    <div class="card-body"> @if (session('status'))
                            <div class="alert alert-success"> {{ session('status') }} </div> @endif
                        <table class="table">
                            <thead style="font-size: 20px">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th style="text-align: center;" scope="col">Select for Sale?</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 20px"> @foreach ($products as $product)
                                <tr >
                                    <th style="vertical-align: middle;" scope="row">{{$product->id}}</th>
                                    <td style="vertical-align: middle;">{{ $product->name }}</td>
                                    <td style="vertical-align: middle;">${{ $product->price }} {{ $product->unit }}</td>
                                    <td style="text-align: center"> <input class="form-check-input" type="checkbox" value="{{ $product }}" {!! $product->isChecked == 1 ? ' checked="checked"' : '' !!} id="saleCheckbox">

                                </tr> @endforeach </tbody>
                        </table>
                    </div>
                    <a href="{{ route('products.store') }}" style="text-align: center" class="btn btn-info btn-block btn-lg">Start 30 Minute Sale</a>

                </div>
            </div>
        </div>
    </div> @endsection