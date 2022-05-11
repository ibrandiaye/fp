<?php

namespace App\Http\Controllers;

use App\Repositories\DonateurRepository;
use App\Repositories\ProjetRepository;
use Illuminate\Http\Request;

class DonateurController extends Controller
{
    protected $donateurRepository;
    protected $projetRepository;
    public function __construct(DonateurRepository $donateurRepository, ProjetRepository $projetRepository)
    {
        $this->donateurRepository = $donateurRepository;
        $this->projetRepository = $projetRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donateurs = $this->donateurRepository->getAll();
        return view('donateur.index',compact('donateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets = $this->donateurRepository->getAll();
        return view('donateur.add',compact('projets'));
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
            'montant'=> 'required|integer',
            'projet_id'=> 'required|integer',
        ],[
            'nom.required' => 'Nom obligatoire',
            'email.required'=> 'Email obligatoire',
            'montant.required'=> 'montant obligatoire',
            'projet_id.required'=> 'projet obligatoire',
        ]);
        $projet = $this->donateurRepository->store($request->all());
        return redirect()->route('donateur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donateur = $this->donateurRepository->getById($id);
        $projets = $this->projetRepository->getAll();
        return view('donateur.edit',compact('donateur','projets'));
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
        $this->donateurRepository->update($id,$request->all());
        return redirect()->route('donateur.index');
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
    public function viewFormDonnation($id){
        $projet = $this->projetRepository->getById($id);
        return view('front.paiement',compact('projet'));

    }
}
