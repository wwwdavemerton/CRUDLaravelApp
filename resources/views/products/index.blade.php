@extends('inc/header')

@section('content')



    <div class="container-fluid mb-5 p-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="title-bar d-flex flex-row align-content-center justify-content-between mb-3">
                    <h4>Products List</h4>
                    <a href="/products/create"><button class="btn btn-primary ml-3">Add new product</button></a>
                </div>                

                @if (count($products) > 0)            
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Desc</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Quantity</th>
                            <th scope="col">Actions</th>
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
                            <th scope="row">
                                <a href="/products/{{ $product->id }}/edit"><button class="btn-primary d-inline" type="button">Edit</button></a>
                                <form method="POST" action="/products/{{ $product->id }}" class=" d-inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn-danger" type="submit">Delete</button>
                                <form>
                            </th>
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
    
@endsection






























