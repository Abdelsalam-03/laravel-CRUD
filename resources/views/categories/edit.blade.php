@extends('layout.app')
@section('title', 'Edit Category')
@section('content')
<div class="container">
    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST" class="row-md d-flex-md">
        @csrf
        @method('PUT')
        <div class="mb-3 col-md-7">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}">
            @error('name')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
          </div>
            <div class="col-md-7">
                <input type="submit" value="Update" class="form-control btn btn-success">
            </div>
    </form>
</div>
@endsection