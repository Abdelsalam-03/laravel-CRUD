@extends('layout.app')
@section('title', 'Categories')
@section('content')
<div class="container">
    <div class="text-center p-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
    </div>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-around">

        @foreach ($categories as $category)

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="btn btn-success btn-sm">View</a>
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="d-inline delete-form">
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
        @if (empty($category))
            <h2 class="text-danger">There Is No Categories To View</h2>
        @endif
    </div>
</div>
@endsection