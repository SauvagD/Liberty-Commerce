@extends("layouts.app")
@section("content")

<link href="{{ asset('../css/main.css') }}" rel="stylesheet">

@if($content->isEmpty())
    <div class="emptyCart">
        <p><button class="button" onclick="window.location.href = '/catalog';">Vers le catalogue</button></p>
        <p class="sign">Your cart is empty, let's buys something !!</p>
    </div>
@else
    <div class="container">
        <h1>Panier</h1>
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unité</th>
                <th>Total</th>
            </tr>
@foreach($content as $product)
    <tbody>
        <tr>
            <td><img class="photo" src="{{ asset('/storage/img/product/'.$product->attributes->image)}}"></td>
            <td id="produit">
                <p>{{$product->name}}</p>
                <p>{{$product->description}}</p>
            </td>
            <td id="quantité"><p>{{$product->quantity}}</p></td>
            <td><p>{{number_format($product->price),2}} €</p></td>
            <td><p>{{number_format($product->price * $product->quantity,2)}} €</p></td>
        </tr>
      
@endforeach
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td>{{number_format($total)}} €</td>
        </tr>
    </tbody>
            </thead>
            </table>
    </div>
@endif
@endsection
