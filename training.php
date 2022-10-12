<style>
    h2{
        margin-bottom: 5px;
        font-size: 30px;
        color: green;
        text-align: center;
        border: solid 3px green;
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

//exercice

$couleur1 = "Bleu";
$couleur2 = "Blanc";
$couleur3 = "Rouge";

echo $couleur1 . "-" . $couleur2 . "-" . $couleur3;



echo '<h2>Les opérateurs arithmétiques</h2>';

$a = 10;
$b = 2;

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";


$d= 10;
$c= 2;
echo $d += $c; // Revient à faire : $d = $d + $c 
echo "<br>";


echo '<h2>Les structures conditionnelles (if/else) </h2>';


// isset() et empty()

// isset() permet de vérifier si la variable est définie

// empty() permet de vérifier si la variable est vide

// Les valeurs suivantes sont évaluées comme vide : 0, 0.0, "", "0", NULL, FALSE

$a= 10;
$b= 5;
$c= 2;

//if else

if($a>$b)
{
    echo "$a est supérieur à $b <br>";
}
else
{
    echo "$b est supérieur à $a <br>";
}


if( $a > $b && $b > $c) // si $a > $b ET $b > $c
{
    echo "$a est supérieur à $b et $b est supérieur à $c <br>";
}


if($a == 9 || $b>$c) // Si $a contient(==) la valeur 9 ou $b > $c
{
    echo "Au moins une des 2 conditions est vérifiée <br>";
}

// DIFFERENT

if($a == 8){
    echo "$a contient 8 <br>";
}
elseif($a != 10){
    echo "$a est différent de 10 <br>";
}
else{
    echo "Aucune des conditions <br>";
}


// XOR

if($a == 10 XOR $b==6){ // XOR : seulement une des 2 conditions doit être vérifiée
    echo "Ou exclusif <br> ";
}


// Forme contractée

echo($a==10) ? "$a contient 10 <br>" : "$a ne contient pas 10<br>";
// ? remplace le if , : remplace else


//!\\PHP7: A partir du PHP7 on peut entrer une valeur sous condition

$var1 = isset($mavar)?$mavar : 'valeur par defaut'; // Si $mavar existe, affecte sa valeur ds $var1 sinon on lui affecte valeur par defaut


echo "<br>";
echo $var1;

$var2 = $mavar ?? 'pas de valeur'; // la même chose en plus court ?? soit l'un soit l'autre

echo "<br>";
echo $var2;

$vara = 1;
$varb ="1";

if($vara === $varb){
    echo "Il s'agit de la même chose <br>"; 
}

/*
= Affectation
== comparaison des valeurs
=== comparaison des valeurs et du type
*/


echo '<h2>Conditions </h2>';

$couleur = 'jaune';


// case : représente les différents cas
// break permet de sortir du switch si le cas est vérifié


switch ($couleur){
    case 'bleu' : 
        echo "C'est du bleu";
        break;
    case 'rouge' :
        echo "C'est du rouge";
        break;
    case 'vert' : 
        echo "C'est du vert";
        break;
    default :
        echo "Aucune des couleurs";
        break;
}

