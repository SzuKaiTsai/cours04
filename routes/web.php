<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\CarteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CarteController::class, "index"])
        ->name("accueil");

Route::get("/cartes/{id}",[CarteController::class,"show"])
        ->whereNumber('id')
        ->name("cartes.show");

Route::get("/panier", [AchatController::class, "index"])
        ->name("panier");
