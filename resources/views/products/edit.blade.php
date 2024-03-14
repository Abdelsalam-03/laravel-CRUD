@extends('layout.app')
@section('title', 'Edit Product')
@section('content')
<div class="container">
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" class="row-md d-flex-md">
        @csrf
        @method('PUT')
        <div class="mb-3 col-md-7">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
            @error('name')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 col-md-7">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @selected($category->id == $product->category->id)>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 col-md-7">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
            @error('price')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-7">
            <input type="submit" value="Update" class="form-control btn btn-success">
        </div>
    </form>
</div>
@endsection