<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <input type="submit" value="Create">
    </form>
</body>
</html>