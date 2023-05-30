@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Order</h1>
    </div>

    <div class="py-3">
        <form action="{{ url('/dashboard/orders/update/' . $order->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">User</span>
                <input name="user_id" type="number" class="form-control" value="{{ $order->name }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Product</span>
                <input name="product_id" type="number" class="form-control" value="{{ $order->name }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Quantity</span>
                <input name="quantity" type="number" class="form-control" value="{{ $order->name }}">
            </div>

            <div class="input-group">
                <input name="save" type="submit" value="Save" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
