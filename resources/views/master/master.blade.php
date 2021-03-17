<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Tripegate')</title>

    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/bootstrap.min.css') }}">
    <!--google font css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

   <!-- header  -->
   <div id="wrap">
        <div class="container-fluid">
        <!-- nav  -->
            <div class="row">
                <div class="col-md-12">
                        <ul class="nav justify-content-center mt-5">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('show-order') }}">Show Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('highest-amount-order/query') }}" title="By Query">Most Selling Product(amount wise)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('highest-amount-order/eloquent') }}" title="By Eloquent">Most Selling Product(amount wise)</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('highest-selling-product/query') }}" title="By Query">Most Selling Product(Price wise)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('highest-selling-product/eloquent') }}" title="By Eloquent">Most Selling Product(Price wise)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('country-wise-order') }}">Country Wise Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('product-wise-order') }}">Product Wise Order</a>
                            </li>
                        </ul>
                </div>
            </div>
        <!-- /nav  -->
        </div>
        <div id="app">
            @yield('content')
        </div>
   </div>

   <script>
        var base_url = "{{ url('/') }}"+'/';
    </script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>