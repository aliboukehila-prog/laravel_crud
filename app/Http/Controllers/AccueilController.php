<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit; // n'oubliez pas d'importer le modèle

class AccueilController extends Controller
{
    public function index()
    {
        $produits = Produit::all(); // récupérer les produits
        return view('index', compact('produits')); // passer à la vue
    }
}
