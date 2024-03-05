<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <a href="{{route('products.create')}}">Create Product</a>
    @foreach ($products as $product)
        <div >
            <p>{{ $product['name'] }}</p>
            <p>Price : {{ $product['price'] }}</p>
            <a href="{{route('products.show',['product' => $product['id']])}}">View</a>
            <a href="{{route('products.edit',['product' => $product['id']])}}">Edit</a>
            <form action="{{route('products.destroy', ['product' => $product['id']])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
        <hr>
    @endforeach
</body>
</html>