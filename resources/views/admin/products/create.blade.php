@extends('layouts.admin')

@section('content')
    <h1>Create Product</h1>

    <div class="py-3">
        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input name="name" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Category</span>
                <select name="category" class="form-select">
                    <option value="1">Cloths</option>
                    <option value="2">Shoes</option>
                    <option value="3">Accessories</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Quantity</span>
                <input name="quantity" type="number" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Price</span>
                <input name="price" type="number" class="form-control">
                <span class="input-group-text">$</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="input-group">
                <input name="create" type="submit" value="Create" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
