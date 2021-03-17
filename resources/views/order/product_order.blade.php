@extends('master.master')
@section('title') Product wise Order @endsection
@section('content')
<!-- Order Table  -->
    <product-order :product_orders="{{ $orders }}"></product-order>
<!-- /Order Table  -->
@endsection