<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\RedirectsUsers;

class AuthController extends Controller
{
    //Page catalog considéré comme la page d'accueil (si on est déjà connecté) 
    public function home(){
      return redirect('catalog');
    }

    //Gestion de la connexion utilisateur (si il est déjà connecté il est automatiquement redirigé vers le catalogue)
    public function login(Request $request){
      if(auth()->check()){
        return redirect('catalog');
        }
      return view('auth.login');
    }

    //Affiche la page catalogue, consistué de tous les produits de la boutique
    public function catalog(Request $request){
      if(! auth()->check()){
        return redirect('login');
      }
        $product = new Product();
        $all_product= $product::all();
      return view('product.catalog')->withProducts($all_product);
    }
}
