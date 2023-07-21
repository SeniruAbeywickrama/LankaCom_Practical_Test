@extends('welcome')

<section>
    <div class="container" style="height: auto; width: 40% ;border: 1px solid black; margin-top: 150px; padding: 20px; border-radius: 5px">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ url('add-product') }}" method="post" >
            @csrf
            <div class="mb-3 row">
                <h2 class="col-12">Add New Product</h2>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="unit_price" class="col-sm-2 col-form-label">Unit Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="unit_price" name="unit_price">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="password" class="form-control" id="description" name="description"></textarea>
                </div>
            </div>
            <div class="container" style="text-align: right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
                <a href="/admin" type="button" class="btn btn-warning">Back</a>
            </div>
        </form>
    </div>
</section>
