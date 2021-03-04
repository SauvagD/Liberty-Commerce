@extends('layouts.app')
@section('content')
<link href="{{ asset('../css/admin.css') }}" rel="stylesheet">


@if (session('success'))
        <div class="alert-alert-success">
            {{session('success')}}
        </div>
        @endif

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" >
  @csrf
      {{ csrf_field() }}
      <div class="container">
            <h1 class="sign">Ajoutez un nouveau <br> produit</h1>
            <input type="text" class="form-control" placeholder="Title" name="title">
            @if($errors->has('title'))
            <p>{{$errors->first('title')}}</p>
            @endif
            <br>
            <input type="text" class="form-control" placeholder="Description" name="description">
            @if($errors->has('description'))
            <p>{{$errors->first('description')}}</p>
            @endif
            <br>
            <input type="number"  class="form-control" placeholder="Stock" name="quantity_stock">
            @if($errors->has('quantity_stock'))
            <p>{{$errors->first('quantity_stock')}}</p>
            @endif
            <br>
            <input type="number" step="0.01" class="form-control" placeholder="Price" name="price">
            @if($errors->has('price'))
            <p>{{$errors->first('price')}}</p>
            @endif
            <br>

            <input type="file" name="image"  size="20" placeholder="Image" accept="image/*"/>
            @if($errors->has('image'))
            <p>{{$errors->first('image')}}</p>
            @endif
            <br>
            <br>

            <button type="submit" class="btn btn-primary">Créer un nouveau produit</button>
            </div>

</form>

@endsection
