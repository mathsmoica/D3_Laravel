Mes compétences : <br>
 @foreach ($listeCompt as $acquis)
     {{ $acquis->code }} : {{ $acquis->intitule }}<br>
 @endforeach