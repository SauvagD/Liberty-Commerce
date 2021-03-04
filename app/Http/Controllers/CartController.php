<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\User;
use Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //Ajoute un produit au panier
    public function add(Request $request){
        $product = Product::find($request->id);
        $max = $product->quantity_stock;
        if($max < $request->quantity_stock){
            return back()->with('msg', 'The Message');
        }
        request()->validate([
            'quantity_stock' =>['required'],
        ]);
        Cart::add(array(
            'id'=>$product->id,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>$request->quantity_stock,
            'attributes'=>array('image'=>$product->image, 'description'=>$product->description)
        ));
      return redirect()->to('panier');
    }

    //Affiche le panier 
    public function index(){
        $content = Cart::getContent();
        $total = Cart::getTotal();
        return view('cart.main', compact('content', 'total'));
    }

    //Permet l'ajout d'un produit au panier, depuis la page catalogue
    public function direct(Request $request){
        $product = Product::find($request->id);
        Cart::add(array(
            'id'=>$product->id,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>1,
            'attributes'=>array('image'=>$product->image, 'description'=>$product->description)
        ));
      return redirect()->to('panier');
    }
}

