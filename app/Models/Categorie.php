<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function cartes(){

        return $this->hasMany(Carte::class);
    }
}
