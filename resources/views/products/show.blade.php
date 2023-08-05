@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Product</h2>
                </div>
                <div class="pull-right">
                    <a href="{{ URL::previous() }}" class="btn btn-warning">Back</a>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection()
