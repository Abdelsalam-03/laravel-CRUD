@extends('layout.app')
@section('title', 'Create Product')
@section('content')
<div class="container">
    <form action="{{ route('products.store') }}" method="POST" class="row-md d-flex-md">
        @csrf
        <div class="mb-3 col-md-7">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
            @error('name')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-7">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-select" value="{{old('category')}}">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <div class="text-danger m-2">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-7">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}">
            @error('price')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
            </div>
            <div class="col-md-7">
                <input type="submit" value="Add" class="form-control btn btn-success">
            </div>
    </form>
</div>
@endsection