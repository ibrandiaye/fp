<?php
namespace App\Repositories;

use App\Projet;

class ProjetRepository extends RessourceRepository{
  public function __construct(Projet $projet)
  {
     $this->model = $projet;
  }

  public function listeProjet(){
      return Projet::with(['porteur','donateurs','images'])
      ->orderBy('id','desc')
      ->paginate(10);
  }
  public function unProjet($id){
    return Projet::with(['porteur','donateurs','images'])
    ->where('id',$id)
    ->first();
}
public function lastthreeProjet(){
    return Projet::with(['porteur','donateurs','images'])
    ->orderBy('id','desc')
    ->limit(3)
    ->get();
}
}
