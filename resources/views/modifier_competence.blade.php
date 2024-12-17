
<h1>Modification d'une compétence</h1><br>

<form name="new_skill" method="POST" action="{{route ('mesCompetences.update',$competence_selectionne->id)}}">
    @method('PATCH')
    <label for="code"> Code</label>
    <input name="code" type="text" value="{{$competence_selectionne->code}}"/>
    <label for="intitule"> Intitulé</label>
    <input name="intitule" type="textarea" value="{{$competence_selectionne->intitule}}"/>

    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

    <input type="submit" value="Sauvegarder"/>
</form>