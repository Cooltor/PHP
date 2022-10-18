<h1>Quel est votre pays ?</h1>
<ul>
    <li>
        <a href="?pays=fr">France</a>
    </li>
    <li>
        <a href="?pays=de">Allemagne</a>
    </li>
    <li>
        <a href="?pays=es">Espagne</a>
    </li>
    <li>
        <a href="?pays=it">Italie</a>
    </li>
</ul>



<?php


if(isset($_GET['pays'])) // On vérifie s'il y a un pays dans l'url
{
    $pays = $_GET['pays'];

}else if(isset($_COOKIE['pays'])) // On vérifie s'il y a un cookie qui est isset()
{
    $pays = $_COOKIE['pays']; // $_COOKIE est une superglobale donc un array
} else {
    $pays = '';
}

$duree = 365*24*3600; // La durée de vie d'un cookie est de un an.

setcookie("pays", $pays, time()+$duree); // setcookie() permet de créer un cookie. On lui donne un nom, une valeur et la durée de vie

switch($pays)
{
    case 'fr' :
        echo "Bonjour";
        break;
    case 'de' :
        echo "Guten Tag";
        break;
    case 'es' :
        echo "Buenos Dias";
        break;
    case 'it' :
        echo "Buongiorno";
        break;
    default:
        echo 'Quel est votre pays ?';
        break;
}

?>