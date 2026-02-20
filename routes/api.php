<?php

use App\Http\Controllers\CarteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/cartes/{id}", [CarteController::class, 'showAjax'])
    ->name("cartes.showAjax");
