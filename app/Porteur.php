<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porteur extends Model
{
    protected $fillable = [
        'nom', 'email', 'tel','description'
    ];
    public function projets(){
        return $this->hasMany(Projet::class);
    }
}
