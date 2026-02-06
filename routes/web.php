<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\CarteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CarteController::class, "index"])
        ->name("accueil");


Route::get("/panier", [AchatController::class, "index"])
        ->name("panier");
