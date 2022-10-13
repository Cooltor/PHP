<?php

// $_GET est une superglobale. Elle est tjs en majuscule et permet de récupérer des données via l'url 


if($_GET) {

    echo "Param1 url : " . $_GET['article']. "<br>";
echo "Param2 url : " . $_GET['couleur']. "<br>";
echo "Param3 url : " . $_GET['prix']. "<br>";

}


// ?clé=valeur&clé=valeur . Donc je passe les params ds l'url sous forme de tableau
// Les superglobales dont tous des tableaux( array)

?>

<h1>Page 2</h1>

