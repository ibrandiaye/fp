<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'titre', 'descriptionp', 'montant','photo','lieu','latitude','longitude','porteur_id',
        'etat','categorie_id'
    ];

    public function porteur(){
        return $this->belongsTo(Porteur::class);
    }
    public function projets(){

        return $this->hasMany(Projet::class);
    }
    public function donateurs(){
        return $this->hasMany(Donateur::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
