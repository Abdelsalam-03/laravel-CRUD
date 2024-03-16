@extends('layout.app')
@section('title', 'Ao Store - ' . $category->name)
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
        </div>
        <div class="card-footer d-flex justify-content-around">
            <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="d-inline delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
            </form>
        </div>
    </div>
</div><div class="container">
    <div class="text-center">
        <h3 class=" pt-4 text-primary">Products</h3>
    </div>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-around my-2">

        @foreach ($products as $product)

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Category - {{ $product->category->name }}</p>
                        <p class="card-text">Price - ${{ $product->price }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-outline-success btn-sm">View</a>
                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete">
                        </form>

                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
@endsection