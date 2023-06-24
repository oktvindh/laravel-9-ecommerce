<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif


    @foreach ($carts as $cart)
        <img src="{{ url('storage/' . $cart->product->image) }}" alt="" height="100px">
        <br>  
        <p>Name: {{ $cart->product->name }}</p> 
        <br>
        <form action="{{ route('update_cart', $cart) }}" method="post">
            @method('patch')
            @csrf
            
            <input type="number" name="amount" value="{{ $cart->amount }}">
            <button type="submit">update amount</button>
        </form>
        <br>
        <form action="{{ route('delete_cart', $cart) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">delete</button>

        </form>
        <br>
    @endforeach
</body>
</html>