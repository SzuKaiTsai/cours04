<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    /**
     * Affiche la liste des cartes(accueil)
     *
     * @return View
     */
    public function index(){

        // retrieve all cards
        $cartes = Carte::all();
        //dd($cartes); // dump & die = var_dump()

        // retrieve all cards
        $categories = Categorie::all();
        //dd($categories);

        // retrieve specific card based on id
        $carte = Carte::findOrFail(1);
        //dd($carte);

        // retrieve cards worth 200 or more
        $cartes = Carte::where('prix', '>=', 200)
                -> get();

        //dd($cartes);

        // retrieve cards where nb is lower than 50
        $cartes = Carte::where('nb_cartes', '<', 50)
                -> get();
        //dd($cartes);

        // retrieve cards whose name contains "SPx" - LIKE:
        $cartes = Carte::whereLike('nom', '%Spx%')
                ->get();
        dd($cartes);

        return view("produits.index");
    }
}
