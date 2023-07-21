@extends('welcome')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<section>
    <div class="container" style="text-align: left;margin-top: 30px">
        <h1> <b>Visitor</b> System </h1>
    </div>
    <div class="container" style="width: 80% ; margin-top: 50px; padding: 20px; border-radius: 5px">
        <div class="row">
            <h2>Product List</h2>
        </div>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Qty.</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>
                <td style="display: none">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->unit_price }}</td>
                <td>
                    <input type="number" class="form-control" id="qty" name="qty">
                    <input type="text" class="form-control" style="display: none" id="id" name="id" value="{{ $product->id}}">
                    <input type="text" class="form-control" style="display: none" id="name" name="name" value="{{ $product->name}}">
                    <input type="text" class="form-control" style="display: none" id="unit_price" name="unit_price" value="{{ $product->unit_price }}">
                </td>
                <td>
                    <a href="data/{{$product->id}}/{{$product->name}}/{{$product->unit_price }}" type="submit" class="btn btn-outline-success">Add Cart</a>
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

