@extends('layouts.app')
@section('content')
<link href="{{ asset('../css/produit.css') }}" rel="stylesheet">

  <div class="bloc">
      <img class ="test" src="{{ asset('/storage/img/product/'.$product->image) }}"> 
    <div class="article1">
      <form method="POST" id="panier_add" action="{{route('cart_add', ['id'=>$product->id])}}">
          {{ csrf_field() }}
          <h1>{{$product->title}}</h1>
          <div>{{$product->description}}</div><br>
          <div>Prix:{{$product->price}}$</div><br>

    <div class="quantities">

      <div class="quantité">
              Quantité (disponible : {{$product->quantity_stock}}):<br>
        <input type="number" name="quantity_stock" id="quantity_stock">
          @if($errors->has('quantity_stock'))
            <p>{{$errors->first('quantity_stock')}}</p>
          @endif
        <button type="submit" form="panier_add" class="button" placeholder="quantité" value=1>Ajouter au Panier</button>
      </form>
      </div>
    </div>

  @if (Auth::user()->role == 1)
    <div class="quantity_change">
      <form action="{{route('quantité', ['id'=>$product->id])}}" method="PUT">
          @csrf
        <input type="number" name="quantity_change">
          @if($errors->has('quantity_change'))
            <p>{{$errors->first('quantity_change')}}</p>
          @endif
        <button type="submit" class="button" placeholder="quantité" value="1">Change Quantity</button>
      </form>  
      </div>
@endif

    </div>
  </div>

@endsection
