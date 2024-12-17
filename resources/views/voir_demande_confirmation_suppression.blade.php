<h1>Suprimer la compétence ?</h1><br>

<form name="new_skill" method="POST" action="{{route ('mesCompetences.destroy',$competence_selectionne->id)}}">
    @method('DELETE')
    <label for="code"> Code</label>
    <input name="code" type="text" value="{{$competence_selectionne->code}}" readonly />
    <label for="intitule"> Intitulé</label>
    <input name="intitule" type="textarea" value="{{$competence_selectionne->intitule}}" readonly />

    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

    <input type="submit" value="Supprimer la compétence"/>
</form>