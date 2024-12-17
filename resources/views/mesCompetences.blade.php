Mes compétences : <br>
 @foreach ($listeCompt as $acquis)
     {{ $acquis->code }} : {{ $acquis->intitule }}<br>
 @endforeach


 @foreach ($listeCompt as $acquis)
        {{ $acquis->code }} : {{ $acquis->intitule }} <a href="{{route ('mesCompetences.show', $acquis->id)}}">Voir détails</a>
        <br>
    @endforeach