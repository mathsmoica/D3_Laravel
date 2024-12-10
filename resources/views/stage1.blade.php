<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Stage de Première Année</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Lien vers votre fichier CSS -->


    <!-- il suffit d'insérer la feuille de style et le script js comme d'habitude mais en utilisant la fonction asset -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>



    <!-- dans la vue -->
    <!-- il est possible d'activer la bibliothèque Font Awesome qui est une bibliothèque d'icônes. -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">



     <!-- il est possible d'activer la bibliothèque JQuery. -->
     <script src="{{ asset('/js/jquery.min.js') }}"></script>
</head>

<body>
    <div class="container mx-auto">
        <header>
            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a href="http://localhost:8080/D3/laravel/Portfolio_Eustache/public/" class="text-blue-500 hover:underline">Retour à l'Accueil</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="ml-12">
            <h1 class="text-xl font-bold">Mon Stage de Première Année</h1>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p>Durant mon stage de première année, j'ai eu l'opportunité de travailler sur plusieurs projets intéressants. J'ai acquis de nouvelles compétences en développement web, en particulier avec le framework Laravel.</p>
                <p>Voici quelques-unes des tâches que j'ai réalisées :</p>
                <ul>
                    <li>Analyse des bases de données existantes et mise à jour de la liste des rectifications à effectuer sur les bases de données.</li>
                    <li>Communication avec les collectivités, propositions de solutions et mise en œuvre des rectifications.</li>
                    <li>Formations individuelles du personnel pour l'utilisation de solutions de sécurité (VPN) applicatifs.</li>
                    <li>Recensement de matériels avec l'aide des SISR sur une base de données ainsi que l'outil DCAM.</li>
                </ul>
                <p>Ce stage m'a permis de mieux comprendre le monde professionnel et d'appliquer mes connaissances théoriques dans un contexte réel.</p>
            </div>
        </div>
    </div>
</body>

</html>