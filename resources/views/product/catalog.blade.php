@extends('layouts.app')
@section('content')
<link href="{{ asset('../css/catalogue.css') }}" rel="stylesheet">


<div class="container">
@forelse($products as $product)

  <div class="bloc">
          <img class ="produit" src="{{ asset('/storage/img/product/'.$product->image) }}"> 
          <div class="button">
                <p><button class="button2" onclick="window.location.href = '/product/{{ $product->id }}';">Voir plus</button></p>
           <form method="POST" id="panier_add" action="{{route('cart_direct', ['id'=>$product->id])}}">
                        @csrf
                <button class="button3" type="submit" id="panier_add">Ajoutez au panier</button>
           </form>
          </div>
   </div>
@empty
 <div class="emptyCatalog">
    <p>Aucun produits</p><br>
@if (Auth::user()->role == 1)
        <button class="adminButton" onclick="window.location.href = '/admin';">Ajoutez un produit à la boutique</button>
@endif
  </div>
@endforelse
</div>

@endsection
