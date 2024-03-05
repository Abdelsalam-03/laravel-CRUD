<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <a href="{{route('products')}}">Home</a>
    <form action="{{route('products.update', ['product' => $product['id']])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{$product['id']}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$product['name']}}">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{$product['price']}}">
        <input type="submit" value="Update">
    </form>
</body>
</html>