@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>

    <div class="py-3">
        <form action="{{ url('/dashboard/categories/update/' . $category->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input name="name" type="text" class="form-control" value="{{ $category->name }}">
            </div>

            <div class="input-group">
                <input name="create" type="submit" value="Save" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
