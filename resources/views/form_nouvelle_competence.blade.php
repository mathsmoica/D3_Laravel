<h1>Ajout d'une nouvelle compétence</h1><br>

    <form name="new_skill" method="POST" action="{{route ('mesCompetences.store')}}">
        {{csrf_field()}}

        <label for="code"> Code</label>
        <input name="code" type="text"/>
        <label for="intitule"> Intitulé</label>
        <input name="intitule" type="textarea"/>

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <input type="submit" value="Sauvegarder"/>
    </form>