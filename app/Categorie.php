<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nomc'
    ];
    public function projets() {
        return $this->hasMany(Projet::class);
    }
}
