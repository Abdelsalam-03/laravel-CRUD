@extends('layout.app')
@section('title', 'Products')
@section('content')
<div class="container">
    <div class="text-center p-3">
        <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
    </div>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-around">

        @foreach ($products as $product)

            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Category - {{ $product->category->name }}</p>
                        <p class="card-text">Price - ${{ $product->price }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-success btn-sm">View</a>
                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>

                    </div>
                </div>
            </div>

        @endforeach

    </div>
    <div class="text-center p-3">
        @if (empty($product))
            <h2 class="text-danger">There Is No Products To View.</h2>
        @endif
    </div>
</div>
@endsection