@extends('master.master')
@section('title') Most Selling Product(Query) @endsection
@section('content')
<!-- Order Table  -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
        <div class="card text-center">
            <div class="card-header">
            Most Selling Product (Query)
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <th scope="row"> {{ $product->product_id }} </th>
                                <td> {{ $product->amount }} </td>
                                <td> {{ $product->price }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
<!-- /Order Table  -->

@endsection