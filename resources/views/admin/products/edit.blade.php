@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>

    <div class="py-3">
        <form action="{{ url('/dashboard/products/update/' . $product->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input name="name" type="text" class="form-control" value="{{ $product->name }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Category</span>
                <select name="category_id" class="form-select" value="{{ $product->category }}">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Quantity</span>
                <input name="quantity" type="number" class="form-control" value="{{ $product->quantity }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Price</span>
                <input name="price" type="number" class="form-control" value="{{ $product->price }}">
                <span class="input-group-text">$</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Image</span>
                <input name="image" type="text" class="form-control" value="{{ $product->image }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="input-group">
                <input name="create" type="submit" value="Save" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
