<?php
namespace App\Repositories;

use App\Donateur;

class DonateurRepository extends RessourceRepository{
  public function __construct(Donateur $donateur)
  {
     $this->model = $donateur;
  }
}
