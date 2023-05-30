@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href=" {{ asset('css/product.css') }} ">
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active">
                                <img width="400" src="{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <div class="rating"></div>
                        <p class="product-description">{{ $product->description }}</p>
                        <h4 class="price">Price: <span>$ {{ $product->price }}</span></h4>
                        </p>
                        <div class="action">
                            <form action="{{ url('/orders/store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <label for="quantity">Quantity</label>
                                <div class="line">
                                    <input name="quantity" type="number" class="form-control" value="1"
                                        min="1" style="margin-right: 10px">
                                    <input name="buy" type="submit" value="Buy" class="btn btn-outline-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
