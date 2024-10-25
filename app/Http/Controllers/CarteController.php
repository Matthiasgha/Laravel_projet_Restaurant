<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CarteController extends Controller
{
    public function index()
    {
        $title = 'Carte';
        $produits = Produit::get();
        // affiche la vue carte.blade.php
        return view('carte', [
            'title' => $title,
            'produits' => $produits,
        ]);
    }
}
