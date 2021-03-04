<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\RedirectsUsers;
class ProductController extends Controller
{
    //Affiche la page d'un produit
    public function product(Product $product){
        return view('product.product', compact('product'));
         }

    //Créer un produit (Admin)     
    public function store(Request $request){
      request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'price' => ['required'],
        'quantity_stock' => ['required'],
        'image' => ['required']
        ]);
               $product = new Product();
               $product->title = $request->get('title');
               $product->price = $request->get('price');
               $product->description = $request->get('description');
               $product->quantity_stock = $request->get('quantity_stock');
               $product->image = str_replace('public/img/product/', '', $request->file('image')->store('public/img/product'));
               $product->save();
               return back()->with("Votre produit a bien été ajouté");
         }

    //Gestion du mode admin     
    public function auth()
         {
           if (auth()->user()->role == '1') {
             return view ('product.see');
           }
           return redirect()->to('catalog');
         }
}
