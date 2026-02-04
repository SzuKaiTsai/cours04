<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Affiche la liste des produits(accueil)
     *
     * @return View
     */
    public function index(){
        return view("produits.index");
    }
}
