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
      public function show($idCompetence)
    {
         //équivalent à "select * from competences where id=idCompetence"
         $res = competence::find($idCompetence);

         //demande d'affichage de la vue "voir_details_competence"
         return view('voir_details_competence', ["competence_selectionne" => $res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */

     public function edit($idCompetence)
     {
         //équivalent à "select * from competences where id=idCompetence"
         $res = competence::find($idCompetence);
 
         //demande d'affichage de la vue "modifier_competence"
         return view('modifier_competence', ["competence_selectionne" => $res]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    
     public function update(Request $request, $idCompetence)
     {
            //tous les champs sont obligatoires
            $this->validate($request, ['code'=>'required']);
            $this->validate($request, ['intitule'=>'required']);
    
            //création de l'objet
            $comp =competence::find($idCompetence);
 
            //initialisation de ses attributs avec les valeurs du formulaire
            $comp->code=$request->code;
            $comp->intitule=$request->intitule;
    
            //enregistrement effectif dans la base de données
            $comp->save();
    
            //affichage de la vue "mesCompetences"
            return redirect('/mesCompetences');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */

     public function destroy($idCompetence)
     {
         //création de l'objet
         $comp = competence::find($idCompetence);
         //suppression de l'enregistrement dans la BDD
         $comp->delete();
 
         //affichage de la vue "mesCompetences"
         return redirect('/mesCompetences');
     }


    public function confirmation($idCompetence)
    {
        //création de l'objet
        $comp = competence::find($idCompetence);

         //demande d'affichage de la vue "voir_details_competence"
         return view('voir_demande_confirmation_suppression', ["competence_selectionne" => $comp]);
    }
     



}
