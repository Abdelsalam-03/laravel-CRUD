@extends('layout.app')
@section('title', 'Ao Store - ' . $product->name)
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->category->name }}</p>
            <p class="card-text">${{ $product->price }}</p>
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
@endsection