<!DOCTYPE html>
<html lang="fr">

<head>
	<title>DEGUS-APP | Accueil</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- pour inclure le fichier qui contient le css de notre application coté visiteur -->
	@include('layouts.clients.css')

</head>

<body>
    <!-- pour inclure le fichier qui contient le menu de notre application coté visiteur -->
    @include('layouts.clients.menu')

    <!-- inclure la vue correspondant à l'action qu'on veut faire -->
    @yield('contenu')


    <!-- pour inclure le fichier qui contient le footer de notre application coté visiteur -->
    @include('layouts.clients.footer')

	<!-- pour inclure le fichier qui contient le js de notre application coté visiteur -->
    @include('layouts.clients.js')



</body>

</html>

