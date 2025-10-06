<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Изменение продукта</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{$product->name}}"><br>
        <input type="text" name="price" value="{{$product->price}}"><br>
        <textarea name="description">{{$product->name}}</textarea><br>
        <input type="submit" value="Обновить товар">
    </form>
</body>
</html>