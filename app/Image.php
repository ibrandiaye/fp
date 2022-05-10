<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image','projet_id'
    ];

    public function projet(){
        return $this->belongsTo(Projet::class);
    }
}
