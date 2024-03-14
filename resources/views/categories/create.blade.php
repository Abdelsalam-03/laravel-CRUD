@extends('layout.app')
@section('title', 'Create Category')
@section('content')
<div class="container">
    <form action="{{ route('categories.store') }}" method="POST" class="row-md d-flex-md">
        @csrf
        <div class="mb-3 col-md-7">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
            @error('name')
                <div class="text-danger m-2">{{$message}}</div>
            @enderror
          </div>
            <div class="col-md-7">
                <input type="submit" value="Add" class="form-control btn btn-success">
            </div>
    </form>
</div>
@endsection