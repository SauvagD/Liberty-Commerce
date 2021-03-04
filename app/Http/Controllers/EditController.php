<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class EditController extends Controller
{
    //Modifie la quantité d'un produit (Admin)
    public function quantité($id, Request $request){
        request()->validate([
        'quantity_change' => ['required'],
        ]);
        $product = Product::find($id);
        $product->quantity_stock = $request->input('quantity_change');
        $product->save();
        return redirect()->to('catalog');
    }
}
