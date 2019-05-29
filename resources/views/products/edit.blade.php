@extends('inc/header')

@section('content')

    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
            <h1 class="mb-3">Edit Product</h1>
                <form method="POST" action="/products/{{ $product->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="product_name" class="label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                    </div>
                    <div class="form-group">
                        <label for="product_description" class="label">Product Description</label>
                        <input type="text" name="product_description" class="form-control" value="{{ $product->product_description }}">
                    </div>
                    <div class="form-group">
                        <label for="product_price" class="label">Product Price</label>
                        <input type="number" step="0.01" name="product_price" class="form-control" value="{{ $product->product_price }}">
                    </div>
                    <div class="form-group">
                        <label for="product_quantity" class="label">Product Quantity</label>
                        <input type="text" name="product_quantity" class="form-control" value="{{ $product->product_quantity }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>                
            </div>
        </div>
    </div>

    


@endsection