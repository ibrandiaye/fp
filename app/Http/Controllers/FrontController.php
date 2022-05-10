<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use App\Repositories\ProjetRepository;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $projetRepository;
    protected $blogRepository;
    public function __construct(ProjetRepository $projetRepository,
    BlogRepository $blogRepository)
    {
        $this->projetRepository = $projetRepository;
        $this->blogRepository = $blogRepository;
    }

    public function listProjets(){
        $projets = $this->projetRepository->listeProjet();
        return view('front.projet',compact('projets'));
    }
    public function getProjetById($id)
    {
        $projet = $this->projetRepository->unProjet($id);
        return view('front.show',compact('projet'));
    }
    public function lastthreeProjet(){
        $projets = $this->projetRepository->lastthreeProjet();
        $blogs = $this->blogRepository->lastTreeArticle();
        return view('welcome',compact('projets','blogs'));
    }
    
}
