

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

if(isset($_GET['pays'])) {
    $pays = $_GET['pays'];
    
} elseif (isset($_COOKIE['pays'])) {
    $pays = $_COOKIE['pays'];
} else {
    $pays = '';
}





$duree = 365*24*3600;

setcookie("pays", $pays, time() + $duree);


switch($pays) {
    case 'fr':
        echo 'Bonjour';
        break;
    case 'de':
        echo 'Hallo';
        break;
    case 'es':
        echo 'Ola';
        break;
    case 'it':
        echo 'Ciao';
        break;
    default:
        echo 'Quel est votre pays?';
        break;
}



?>