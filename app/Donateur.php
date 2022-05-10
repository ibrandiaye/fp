<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donateur extends Model
{
    protected $fillable = [
        'nom', 'email', 'montant','projet_id'
    ];
    public function projet(){
        return $this->belongsTo(Projet::class);
    }
}
