@extends('inc/header')

@section('content')

<div class="container-fluid mb-5 p-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <h4 class="mb-3">Add new product</h4>

            <form method="POST" action="/products">

                {{ csrf_field() }}

                <div class="mb-3">
                    <input type="text" name="product_name" placeholder="Product Title" class="form-control">
                </div>

                <div class="mb-3">
                    <textarea name="product_description" placeholder="Product description"
                        class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <input type="number" step="0.01" name="product_price" placeholder="Product price"
                        class="form-control"></input>
                </div>

                <div class="mb-3">
                    <input type="number" name="product_quantity" placeholder="Product Quantity"
                        class="form-control"></input>
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Add Product</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection




