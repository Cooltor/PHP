<style>
    h2{
        margin-bottom: 5px;
        font-size: 30px;
        color: green;
        text-align: center;
        border: solid 3px blue;
        border-radius: 3px;
    }
</style>

<h2>Ecriture et affichage</h2>

<?php

echo 'Bonjour tout le monde'; // echo est une instruction d'affichage
echo '<h3> Hello... </h3>'; // echo interprète le html
print 'Salut'; // print fait la même chose que echo

echo ' <h2> Les commentaires </h2>';

?>

<h3>Bonjour</h3>

<?= 'Ceci est une echo'; ?>
<!-- le = remplace le echo -->

<?php

echo 'Commentaire sur une ligne <br>'; // Ceci est un commentaire sur une ligne

echo 'Commentaire sur plusieurs ligne<br>'; /* Ceci est un commentaire 
                                        sur pls lignes
                                        */

echo 'commentaire'; #ceci est un commentaire

echo '<h2>Les variables / Types / Déclaration / Affectation</h2>'; // Une variable est un espace nommé permettant de stocker une valeur

$a = 10;
echo gettype($a) . '<br>'; // gettype() est une fonction prédéfinie permettant de connaitre le type d'une variable : INTEGER

$b = 1.5;
echo gettype($b) . '<br>'; 

$c = 'salut';
echo gettype($c) . '<br>';

$d = '20';
echo gettype($d) . '<br>';

$e = true;
echo gettype($e) . '<br>';

echo '<h2>Assignation par référence</h2>';

$f = 'Salut';
$g = &$f; // Ceci est ass. par référence
echo $f . '<br>';
echo $g . '<br>';


echo '<h2>La concaténation</h2>';

$x = 'Bonjour';
$y = 'Bobby';

echo $x . ' ' . $y . '<br>'; // Le . permet de faire la concaténation

echo $x .$y. '<br>';

echo "$x $y". "<br>";

echo '$x $y'. "<br>"; // avec simple quotes les variables ne sont pas évaluées 

$prenom1= "Bruno";
$prenom1= "Marie";

echo $prenom1 . "<br>"; // La valeur venant après écrase celle d'avant

$prenom2 = 'Nicolas'; // Affectation de Nicolas à  $prenom2
$prenom2 .='Romain'; // Rajoute Romain ds $prenom2 sans écraser l'ancienne valeur

echo $prenom2. "<br>";


echo '<h2>Les constantes</h2>'; // Une constante est une variable qui ne change pas de valeur

define('TVA', 0.2);
define('VILLE', 'Paris'); 

echo TVA . "<br>";
echo VILLE . "<br>";

// Les constantes magiques

echo __DIR__ . "<br>"; // Donne le dossier ds lequel je me trouve

echo __FILE__ . "<br>"; // Donne le fichier courant

echo __LINE__ . "<br>"; // Donne la ligne











