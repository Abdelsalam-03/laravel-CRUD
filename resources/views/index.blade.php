@extends('layout.app')
@section('title', 'Ao Store')
@section('content')
<div class="container">
<br>
    <div class="row g-2 justify-content-around">

        <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Categories</h5>
                <p class="card-text">{{$categoriesCount}}</p>
            </div>
            <div class="card-footer d-flex justify-content-around">
                <a href="{{route('categories.index')}}" class="btn btn-success btn-sm">Browse Categories</a>
            </div>
        </div>

        <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card-body">
                <h5 class="card-title text-danger">Total Products</h5>
                <p class="card-text">{{$productsCount}}</p>
            </div>
            <div class="card-footer d-flex justify-content-around">
                <a href="{{route('products.index')}}" class="btn btn-success btn-sm">Browse Products</a>
            </div>
        </div>

    </div>
    <h3 class="text-center pt-3">Products of Every Category</h3>
    <div class="row g-2 justify-content-around">
        @foreach ($categories as $category)

            <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $category->name }}</h5>
                    <h5 class="card-title">Products : {{ $category->products->count() }}</h5>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="btn btn-danger btn-sm">View Products Related</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection