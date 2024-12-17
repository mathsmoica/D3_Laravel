Mes compétences : <br>
@foreach ($listeCompt as $acquis)
{{ $acquis->code }} : {{ $acquis->intitule }}<br>
@endforeach


@foreach ($listeCompt as $acquis)
{{ $acquis->code }} : {{ $acquis->intitule }} <a href="{{route ('mesCompetences.show', $acquis->id)}}">Voir détails</a>
<br>
@endforeach


@foreach ($listeCompt as $acquis)
{{ $acquis->code }} : {{ $acquis->intitule }} <a href="{{route ('mesCompetences.show', $acquis->id)}}">Voir détails</a>

&nbsp&nbsp

<a href="{{route ('mesCompetences.edit', $acquis->id)}}">Modifier</a>
<br>
@endforeach


<a href="{{route ('mesCompetences.edit', $acquis->id)}}">Modifier</a>
&nbsp&nbsp
<a href="{{route ('confirmation_suppression_competence', $acquis->id)}}">Supprimer</a>