<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ProduitController::class, "index"])
        ->name("accueil");


Route::get("/panier", [AchatController::class, "index"])
        ->name("panier");
