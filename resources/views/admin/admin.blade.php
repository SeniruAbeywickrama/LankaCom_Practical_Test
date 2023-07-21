@extends('welcome')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<section>
    <div class="container" style="text-align: left;margin-top: 30px">
        <h1> <b>Admin</b> System </h1>
    </div>
    <div class="container" style="text-align: right;">
        <a type="button" href="/admin/new-product" class="btn btn-outline-success btn-lg">Add Product</a>
    </div>
    <div class="container" style="width: 80% ; margin-top: 50px; padding: 20px; border-radius: 5px">
        <div class="row">
            <h2>Product Details</h2>
        </div>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Item Number</th>
                <th scope="col">Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="/admin/edit-product/{{$product->id}}" type="button" class="btn btn-outline-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="container" style="text-align: right;">
        <a type="button" href="/" class="btn btn-outline-danger btn-lg">Back To Home</a>
    </div>
</section>
