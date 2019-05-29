@extends('inc/header')

@section('content')

    <div class="container-fluid mb-5 p-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <h4 class="mb-3">Products List</h4>

                @if (count($products) > 0)            
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Desc</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($products as $product)
                        <tr>    
                            <th scope="row">{{ $product->product_name }}</th>
                            <th scope="row">{{ $product->product_description }}</th>
                            <th scope="row">£{{ $product->product_price }}</th>
                            @if($product->product_quantity < 10)
                            <th scope="row" style="color:red">{{ $product->product_quantity }}</th>
                            @else
                            <th scope="row" style="color:green">{{ $product->product_quantity }}</th>
                            @endif
                        </tr>
                            @endforeach
                    </tbody>
                </table>
                @else
                <p>There are no products to display</p>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 p-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <h4 class="mb-3">Customer List</h4> 

                @if (count($customers) > 0)            
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Customer Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Business Name</th>
                            <th scope="col">Customer Phone</th>
                            <th scope="col">Customer Email</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($customers as $customer)
                        <tr>    
                            <th scope="row">{{ $customer->id }}</th>
                            <th scope="row">{{ $customer->customer_name }}</th>
                            <th scope="row">{{ $customer->customer_business_name }}</th>
                            <th scope="row">{{ $customer->customer_phone }}</th>
                            <th scope="row"><a href="mailto:{{$customer->customer_email}}">{{ $customer->customer_email }}</a></th>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
                @else
                <p>There are no Customers to display</p>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 p-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <h4 class="mb-3">Orders List</h4> 

                @if (count($orders) > 0)            
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order Number</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Products</th>
                            <th scope="col">Order Price</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($orders as $order)
                        <tr>    
                            <th scope="row">{{ $order->order_number }}</th>
                            <th scope="row">{{ $order->order_customer_name }}</th>
                            <th scope="row">{{ $order->order_products }}</th>
                            <th scope="row">{{ $order->order_price }}</th>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
                @else
                <p>There are no Orders to display</p>
                @endif
            </div>
        </div>
    </div>




@endsection



















