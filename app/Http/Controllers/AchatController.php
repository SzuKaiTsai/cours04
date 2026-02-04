<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Affiche le panier
     *
     * @return View
     */
    public function index(){
        return view("panier.index");
    }
}
