<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    //protected $table = "cartes";
    //protected $primaryKey = "carteId";

    //belongsTo = many to one
    //hasMany = one to many
    //belongsToMany = many to many
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
