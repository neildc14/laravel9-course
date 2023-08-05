@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create') }}" class="btn btn-success">Create Product</a>
            </div>
        </div>
    </div>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>
@endsection
