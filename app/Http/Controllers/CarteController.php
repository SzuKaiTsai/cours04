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
    public function index(Request $request){

        // retrieve all cards
        // $cartes = Carte::all();

        // retrieve all cards
        // $categories = Categorie::all();

        // retrieve specific card based on id
        // $carte = Carte::findOrFail(1);

        // retrieve cards worth 200 or more
        // $cartes = Carte::where('prix', '>=', 200)
        //         -> get();

        // retrieve cards where nb is lower than 50
        // $cartes = Carte::where('nb_cartes', '<', 50)
        //         -> get();

        // retrieve cards whose name contains "SPx" - LIKE:
        // $cartes = Carte::whereLike('nom', '%SPx%')
        //         ->get();

        // recuperer les cartes qui correspondent to a specific category
        // $cartes = Carte::where('categorie_id', '=', 3)
        //         -> get();

        // retrieve cards w/ 2 categories IMPORTANT FOR ASSIGNMENTS
        // when you're looking for something = you don't need to '=' unlike '<' etc
        //  $cartes = Carte::whereIn('categorie_id', [2,3])
        //  can be chained to other conditions with other things like ->orWhere or like ->where before the ->get();
        //      ->orWhere('nom', %2022%)
        //         -> get();

        // filter cards by price
        // $cartes = Carte::orderBy('prix', 'desc')
        //         -> get();

        // filter to obtain 3 most valuable cards
        // limit() = take()
        // $cartes = Carte::orderBy('prix','desc')
        //         -> limit(3)
        //         -> get();

        // average price of cards
        // $cartes = Carte::avg('prix');

        // least valuable card (when you only want one)
        // $cartes = Carte::orderBy('prix')
        //         -> first();

        // cards between 150 and 300
        // $cartes = Carte::whereBetween('prix', [150, 300])
        //         -> get();

        // count cards
        // $cartes = Carte::count();
        // dd($cartes);


        ////////////////////////

        $recherche = $request->input('recherche');

        return view("produits.index",[
            "cartes" => Carte::all(),
            "categories" => Categorie::all()
        ]);


    }

    public function show(int $id){

            return view("produits.show",[
                "carte" => Carte::findOrFail($id),
                "categories" => Categorie::all()
            ]);
    }
}
