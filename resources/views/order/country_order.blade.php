@extends('master.master')
@section('title') Country wise Order @endsection
@section('content')
<!-- Order Table  -->
    <country-order :country_orders="{{ $orders }}"></country-order>
<!-- /Order Table  -->
@endsection