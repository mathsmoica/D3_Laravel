<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- il suffit d'insérer la feuille de style et le script js comme d'habitude mais en utilisant la fonction asset -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>



    <!-- dans la vue -->
    <!-- il est possible d'activer la bibliothèque Font Awesome qui est une bibliothèque d'icônes. -->
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">
      

            <!-- il est possible d'activer la bibliothèque JQuery. -->
            <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>


<body>
    <a href="{{ route('stage1') }}" class="text-blue-500 hover:underline">En savoir plus sur mon stage</a>     
    <img src="{{ asset('images/espadon.png') }}"width="120" height="120">    
    
    <i class="fa-solid fa-fish"> test Awesome</i>
    <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
</body>

</html>