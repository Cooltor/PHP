<?php

// $_GET est une superglobale. Elle est toujours en majuscule et permet re récupérer les données via l'url

if($_GET)
{
echo "Param1 url : " . $_GET['article'] . "<br>";
echo "Param2 url : " . $_GET['couleur'] . "<br>";
echo "Param3 url : " . $_GET['prix'] . "<br>";
}


// ?article=jean&couleur=noir&prix=20

// ?clé=valeur&clé=valeur . Donc je passe les params dans l'url sous (forme d'un tableau clé valeur)
// Les superglobales sont tous des tableaux(Array)
?>


<h1>Page 2</h1>

<a href="page1.php"> Lien vers page 1</a>