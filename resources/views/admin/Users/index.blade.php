@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ url('/dashboard/categories/create') }}" class="btn btn-sm btn-outline-primary">
                <span data-feather="plus-square" class="align-text-bottom"></span>
                Create New
            </a>
        </div>
    </div>

    <div class="py-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr style="vertical-align: middle">
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a style="float:left;" href="{{ url('/dashboard/categories/edit/' . $category->id) }}" class="mx-2 btn btn-outline-secondary">Edit</a>
                            <form style="float:left;" action="{{ url('/dashboard/categories/delete/' . $category->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-outline-danger"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
