@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Category</h1>
    </div>

    <div class="py-3">
        <form action="{{ url('/dashboard/categories/store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input name="name" type="text" class="form-control">
            </div>

            <div class="input-group">
                <input name="create" type="submit" value="Create" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
