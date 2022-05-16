<?php

namespace App\Http\Controllers;

use App\Image;
use App\Repositories\CategorieRepository;
use App\Repositories\PorteurRepository;
use App\Repositories\ProjetRepository;
use Illuminate\Http\Request;
use App\Repositories\ImageRepository;
use com;

class ProjetController extends Controller
{

    protected $porteurRepository;
    protected $projetRepository;
    protected $imageRepository;
    protected $categorieRepository;
    public function __construct(PorteurRepository $porteurRepository,ProjetRepository $projetRepository,
    ImageRepository $imageRepository, CategorieRepository $categorieRepository)
    {
        $this->porteurRepository = $porteurRepository;
        $this->projetRepository = $projetRepository;
        $this->imageRepository = $imageRepository;
        $this->categorieRepository = $categorieRepository;

    }
    /** $
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = $this->projetRepository->listeProjet();
        return view('projet.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categorieRepository->getAll();
        return view('projet.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string',
            'email'=> 'required|string',
            'tel'=> 'required|string',
            'titre'=> 'required|string',
            //'description'=> '',
            'descriptionp'=> 'required|string',
            'montant'=> 'required|integer',
            'lieu'=> 'required|string',
            'latitude'=> 'required',
            'longitude'=> 'required',
        ],[
            'nom.required' => 'Nom obligatoire',
            'email.required'=> 'Email obligatoire',
            'tel.required'=> 'Téléphone obligatoire',
            'titre.required'=> 'Titre du projet obligatoire',
            'descriptionp.required'=> 'description du projet obligatoire',
            'montant.required'=> 'montant à collecter obligatoire',
            'lieu.required'=> 'Lieu du projet obligatoire',
            'latitude.required'=> 'Latitude du projet obligatoire',
            'longitude.required'=> 'longitude du projet obligatoire',

        ]);
        $porteur =$this->porteurRepository->store($request->only(['nom','email','tel','description']));
        if($request['ia']){
            $destinationPath = 'images/'; // upload path
            $file = $request['ia'];
            $docName = time().".". $file->getClientOriginalExtension();
            $file->move($destinationPath, $docName);
            $request->merge(['photo'=>$docName,'etat'=>'non cloturé']);
        }
        $request->merge(['porteur_id'=>$porteur->id,'categorie'=>$request->categorie_id]);

        $projet = $this->projetRepository->store($request->only(['titre','descriptionp','montant',
        'photo','lieu','latitude','longitude','porteur_id','etat','categorie_id']));
        if($request['gal']){
            $fichiers = $request['gal'];
            $nombreFichier = count($request['gal']);
            for($x = 0; $x < $nombreFichier; $x++) {
                 $files = $fichiers[$x];
                 $destinationPath = 'galerie/'; // upload path
                 $docName = time().$x.".". $files->getClientOriginalExtension();
                 $files->move($destinationPath, $docName);
                 $image = new Image();
                 $image->projet_id = $projet->id;
                 $image->image = $docName;
                 $image->save();
            }
           }
           return redirect('projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = $this->projetRepository->unProjet($id);
        return view('projet.show',compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->categorieRepository->getAll();
        $projet = $this->projetRepository->unProjet($id);
        return view('projet.edit',compact('projet','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request['ia']){
            $destinationPath = 'images/'; // upload path
            $file = $request['ia'];
            $docName = time().".". $file->getClientOriginalExtension();
            $file->move($destinationPath, $docName);
            $request->merge(['photo'=>$docName,'etat'=>'non cloturé']);
        }
        $this->porteurRepository->update($request['porteur_id'],$request->only(['nom','email','tel','description']));
        $this->projetRepository->update($id,$request->all());
        return redirect('projet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
