<?php
namespace App\Repositories;

use App\Porteur;

class PorteurRepository extends RessourceRepository{
  public function __construct(Porteur $porteur)
  {
     $this->model = $porteur;
  }

}
