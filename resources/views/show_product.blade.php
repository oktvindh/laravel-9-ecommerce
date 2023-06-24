<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}}</title>
</head>
<body>
        <a href="{{route('index_product')}}">Back to Product</a>
        <p>Name: {{$product->name}}</p>
        <p>Description: {{$product->description}}</p>
        <p>Price Rp. {{$product->price}}</p>
        <p>Stock: {{$product->stock}}</p>
        <img src="{{ url('storage/' . $product->image) }}" alt="" height="100px">
        <form action="{{route('edit_product', $product)}}" method="get">
            <button type=""submit>Edit Product</button>
        </form>
</body>
</html>