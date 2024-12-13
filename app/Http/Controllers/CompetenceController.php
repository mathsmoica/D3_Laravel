<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   //équivalent à "select * from competences"
   $resultats = Competence::all();
                               
   //demande d'affichage de la page "mesCOmpetences"
   return view('mesCompetences', ["listeCompt" => $resultats]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_nouvelle_competence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tous les champs sont obligatoires
        $this->validate($request, ['code'=>'required']);
        $this->validate($request, ['intitule'=>'required']);

        //création de l'objet
        $comp = new competence();
        //initialisation de ses attributs avec les valeurs du formulaire
        $comp->code=$request->input('code');
        $comp->intitule=$request->input('intitule');

        //enregistrement effectif dans la base de données
        $comp->save();

        //affichage de la vue "mesCompetences"
        return redirect('/mesCompetences');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function show(Competence $competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function edit(Competence $competence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competence $competence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competence $competence)
    {
        //
    }
}
