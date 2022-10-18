<style>
    h2 {
        margin: 0;
        font-size: 15px;
        color: red;
        text-align: center;
    }
</style>

<h2>Ecriture et affichage</h2>

<?php 

echo 'Bonjour tout le monde'; // echo est une instruction d'affichage
echo '<h3>Hello...</h3>'; // On peut écrire du html 
print'Salut'; // print fait la même chose que echo

echo'<hr><h2>Les commentaires</h2>';
?>

<h3>Bonjour</h3>

<?= 'Ceci est un echo <br>';?>
<!-- le = remplace le echo -->

<?php

echo 'Commentaire sur une ligne <br>'; // Ceci est un commentaire sur une ligne

echo 'Commentaire sur plusieurs ligne <br>'; /* Ceci est un commentaire
                                            sur plusieurs lignes
                                        */
echo 'commentaire <br>'; #ceci est un commentaire

echo '<hr><h2>Les variables / Types / Déclaration / Affectation</h2>';
// Une variable est un espace nommé permettant de stocker une valeur

$a = 10;
echo gettype($a) . '<br>'; // gettype() est une fonction prédéfinie permettant de connaitre le type d'une variable : INTEGER

$b = 1.5;
echo gettype($b) . '<br>'; // double

$c = 'salut';
echo gettype($c) . '<br>'; // string 

$d = '20';
echo gettype($d) . '<br>'; // string

$e = true;
echo gettype($e) . '<br>'; // boolean


echo '<hr><h2>Assignation par référence</h2>';

$f = 'Salut';
$g = &$f; // Ceci est une assignation par référence. Donc si la valeur de $f change par la suite, la valeur de $g change automatiquement.
$f = 'Hello';

echo $f . '<br>';
echo $g . '<br>';


echo '<hr><h2>La concaténation</h2>';

$x = 'Bonjour';
$y = 'Jean';

echo $x . ' ' .$y . '<br>'; // Le . permet de faire la concaténation

echo $x .$y . '<br>';

echo "$x $y" . '<br>'; // Ici avec les doubles quotes "" la variable est évaluée

echo '$x $y' . '<br>';  // Avec les simples quotes '' la variable n'est pas évaluée

$prenom1 = 'Bruno'; // Affecte la valeur Bruno à $prénom1
$prenom1 = 'Marie'; // Affecte la valeur Marie dans la variable $prenom1, donc remplace l'ancienne valeur Bruno

echo $prenom1 .'<br>'; // Marie

$prenom2 = 'Nicolas'; // Affectation de Nicolas à $prenom2
$prenom2 .= 'Romain'; // Rajoute Romain dans $prenom2 sans écraser l'ancienne valeur

echo $prenom2. '<br>';


echo '<hr><h2>La constante</h2>';
// Une constante est une variable et comme son nom l'indique sa valeur reste constant (donc ne change pas)

define('TVA', 0.2); 
define('VILLE', 'Paris');

echo TVA . '<br>';
echo VILLE . '<br>';

// Les constantes magiques

echo __DIR__ . '<br>'; // Donne le dossier dans lequel je me trouve 

echo __FILE__ . '<br>'; // Donne le fichier courant 

echo __LINE__ . '<br>'; // Donne la ligne


echo '<hr><h2>Exo</h2>';


// Afficher Bleu-Blanc-Rouge (avec les tirets) en mettant chaque couleur dans une variable.

$bleu = 'Bleu';
$blanc = 'Blance';
$rouge = 'Rouge';

echo $bleu . '-' .$blanc . '-' . $rouge . '<br>';


echo '<hr><h2>Les Opérateurs Arithmétiques</h2>';

$a = 10;
$b = 2;

echo $a + $b . '<br>'; // 12 comme résultat de l'addition
echo $a - $b . '<br>'; // 8 comme résultat de la soustraction
echo $a * $b . '<br>'; // 20 comme résultat de la multiplication
echo $a / $b . '<br>'; // 5 comme résultat pour la division
echo $a % $b . '<br>'; // 0 comme résultat pour le modulo

echo $a += $b; // Revient à faire $a = $â + $b
echo '<br>';


echo '<hr><h2>Les structures conditionnelles (if/else)</h2>';

// isset() et empty()

// isset() permet de vérifier si la variable est définie

// empty() permet de vérifier si la variable est vide

// Les valeurs suivantes sont évaluées comme vide : 0, 0.0, '', '0', NULL, FALSE


$a = 10;
$b = 5;
$c = 2;

// if else

if ($a > $b) // Si $a>$b
{
    echo "$a est supérieur à $b <br>";
}else // Sinon
{
    echo "$b est supérieur à $a <br>";
}


// ET

if ($a > $b && $b > $c) // Si $s > $b ET $b > $c
{
    echo "$a est supérieur à $b et $b est supérieur à $c <br>";
}


// OU

if ($a == 9 || $b > $c) // Si $a contient la valeur 9 OU $b > $c
{
    echo "Au moins une des 2 conditions est vérifiées <br>";
}


// DIFFERENT

if ($a ==8) // Si $a == 8
{
    echo "$a contient 8";
}else if ($a != 10) // Si $a différent de 10
{
    echo "$a est différent de 10";
}else 
{
    echo "Aucune des conditions <br>";
}


// XOR

if ($a == 10 XOR $b == 6) // XOR : seulement une des 2 conditions doit être valide
{
    echo "Ou exclusif <br>";
}


// Forme contractée

echo ($a == 10) ? "$a contient 10" : "$a est différent de 10";
//  '?' remplace le if , ':' remplace else


//!\\ PHP 7 : A partir de php7 on peut entrer une valeur sous condition
$var1 = isset($mavar)?$mavar : 'Valeur par défaut'; // Si $mavar eciste, affecte sa valeur dans $var1 sinon lui affecte valeur par défaut

echo '<br>';
echo $var1;

$var2 = $mavar ?? 'pas de valeur'; // la même chose mais en plus court ?? soit l'un soit l'autre

echo '<br>';
echo $var2;

$vara = 1;
$varb = '1';

if ($vara === $varb)
{
    echo "Il s'agit de la même chose";
}

/*
= Affectation
== Comparaison des valeurs
=== Comparaison des valeurs et du type
*/


echo '<hr><h2>Condition switch</h2>';

$couleur = 'Jaune';

// case : représente les diférents cas
// break permet de sortir du switch si le cas est vérifié


switch ($couleur)
{
    case 'bleu':
        echo "C'est du bleu";
        break;
    case 'rouge':
        echo "C'est du rouge";
        break;
    case 'vert':
        echo "C'est du vert";
        break;
    default:
        echo "Aucune des couleurs <br>";
        break;
}

if ($couleur == "Bleu")
{
    echo "C'est du bleu";
} else if ($couleur == "rouge")
{
    echo "C'est du rouge";
} else if ($couleur == "vert")
{
    echo "C'est du vert";
} else {
    echo "Aucune des couleurs";
}


echo '<hr><h2>Les fonctions prédéfinies</h2>';

// Une fonction prédéfinie  permet de réaliser un traitement spécifique 

print date('d/m/Y'); // La fonction date renvoie la date. Y majuscule pour avoir l'année sur 4 chiffres (2022)

echo '<br>';

$email = 'romy@gmail.com';
echo strpos($email, '@'); // strpos() permet de trouver la position de la première occurence dans la chaine

echo '<br>';

$email2 = 'bonjour';
echo strpos($email2, '@');

echo '<br>';

var_dump(strpos($email2, '@')); // Renvoie false

// var_dump() est une instruction d'affichage améliorée

$phrase = 'Bonjour tout le monde, Ceci est un cours de PHP';

echo iconv_strlen($phrase); // iconv_strlen() permet de retourner la taille d'une chaine

$texte = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex numquam ut voluptatibus soluta culpa autem nam beatae blanditiis vero neque quos assumenda laborum laudantium ab, maxime tempore in, pariatur sit!';

// substr() permet de retourner une partie d'une chaine de caractère
echo '<br>';

echo substr($texte, 0, 100) . "... <a href='#'>Lire la suite </a>";


echo '<hr><h2>Les fonctions utilisateur</h2>';

function separation() // Déclaration de la fonction
{
    echo "<hr><hr><hr>"; // Ce que fait ma fonction
}

separation(); // Exécution de la fonction


// Fonction avec argument

function bonjour($qui)
{
    return "Bonjour $qui";
}

echo bonjour('Cathy'); // La fonction reçoit un argument

echo "<br>";

$prenom3 = 'Greg';
echo bonjour($prenom3); // l'argument peut être une variable

function appliqueTva($nombre)
{
    return $nombre *1.2;
}

echo '<br>';
echo appliqueTva(100);

function appliqueTva2($nombre, $taux=1.2)
{
    return $nombre * $taux;
}

echo '<br>';
echo appliqueTva2(10);
echo '<br>';
echo appliqueTva2(1000, 1.055);


echo '<br>';
meteo("hiver", "5"); // Il est possible d'exécuter une fonction avant sa déclaration

function meteo($saison, $temperature)
{
    echo "Nous sommes en $saison et il fait $temperature degré(s)";
}

// Exo : gérer le s de degré. Si la température est > 1 ou < -1 degré prend s à la fin
echo '<br>';
function meteo2($saison, $temperature)
{
    if($temperature > 1 || $temperature < -1){
        echo "Nous sommes en $saison et il fait $temperature degrés";
    } else {
        echo "Nous sommes en $saison et il fait $temperature degré";
    }
}

meteo2("Automne", "10");

// Portée des variables
echo '<br>';

function jour()
{
    $jour = 'Mercredi'; // cette variable n'existe que dans cette fonction
    return $jour;
}

echo jour();

$day = jour();
echo '<br>';
echo $day;


$pays = "France";

function affichePays()
{
    global $pays; // global permet d'importer une variable de l'espace global dans l'espace local
    echo $pays;
}

echo '<br>';

affichePays();


//!\\php7 : On peut préciser le type en amont

function qui(string $prenom, int $age)
{
    return $prenom . ' a ' .$age . 'ans';
}
echo '<br>';
echo qui("Luc", 20);


//!\\php7 : On peut préciser en amont la valeur de retour

function isMajeur(int $age): bool
{
    return $age >= 18;
}
echo '<br>';
var_dump(isMajeur(15));
// echo isMajeur(15)

echo '<br>';
var_dump(isMajeur(22));
// echo isMajeur(22)

echo '<hr><h2>Structure itérative</h2>';

// WHILE

$i = 0;

while($i < 5)
{
    echo "$i~~"; // j'affiche $i~~

    $i++; // Revient à : $i = $i+1 incrémentation à chaque tour de boucle
}

while($i <= 9)
{
    if($i < 9)
    {
        echo "$i~~";
        $i++;
    }
    else{
        echo "$i";
        $i++;
    }
}


echo "<br>";

// boucle for

for($j = 0; $j < 10; $j++) // $j = 0 Valeur de départ / $j < 10 condition d'entrée / $j++ sens (incr ou décr)
{
    echo $j . "<br>";
}

echo "<br>";

echo "<select>";

for($j = 1; $j <= 31; $j++)
{
    echo "<option> $j </option> <br>";
}

echo "</select>";



echo "<select>";


$currentYear = date("Y");
$oldYear = $year - 100;
for($j = $currentYear; $j >= $oldYear; $j--)
{
    echo "<option>$j</option> .<br>";
}

echo "</select>";
echo "<br>";

// Faire une boucle qui affiche de 0 à 99 dans une table HTML(chaque ligne doit contenir 10 chifres)

echo "<br>";

echo '<table border="2"><tr>';

for($i = 0; $i <= 99; $i++)
{
    if($i % 10 == 0){
        echo "</tr>";
    }
    echo "<td>" .$i. "</td>";
}


echo "</table>";


$nb =0;

echo '<table border="2">';

for($ligne = 0; $ligne<10; $ligne++)
{
    echo "<tr>";
    for($cellulle = 0; $cellulle <10 ; $cellulle++)
    {
        echo "<td>". $nb . "</td>";
        $nb++;
    }
    echo "</tr>";
}

echo '</table>';


echo "<br>";


echo '<hr><h2>Inclusion de fichier</h2>';


// Include et require permettent d'inclure des fichiers

// include_once et require_once permet d'inclure le fichier une seule fois même si je l'appelle n fois

// La différence entre Include et Require : S'il y a des erreurs, include affiche l'erreur et contrinu l'exécution du code alors que require affiche l'erreur et stop l'exécution du code

// Avec include

include('exemple.inc.php');
echo "<br>";
include('exemple.inc.php');
echo "<br>";


// include_once('exemple.inc.php')


// Avec require

require('exemple.inc.php');
echo "<br>";
require('exemple.inc.php');

// require_once('exemple.inc.php');


echo '<hr><h2>Les tableaux</h2>';

// Un tableau est une variable permettant de stocker un ensemble de valeurs

$liste = array('Nicolas', 'Cathy', 'Romain');

$liste2 = ['Dylan', 'Liam', 'Jean'];

print_r($liste);

echo '<br>';

echo "<pre>"; // <pre> c'est une balise HTML qui permet de formater le texte
print_r($liste);
echo "</pre>";

echo '<br>';

var_dump($liste); // var_dump() affiche le contenu du tableau plus certaines infos comme la taille, le type de chaque valeur

echo '<br>';

echo $liste[2]; // Romain

// foreach


// Quand il y a une variable, elle parcourt les valeurs
foreach($liste as $value)
{
    echo $value . "<br>";
}

// Quand il y a 2 variables, la première parcourt les clés et la seconde les valeurs
foreach($liste as $keys=>$value)
{
    echo $keys . " : " . $value . "<br>";
}

// count() ou sizeof() : permet de connaitre la taille d'un tableau

echo "la taille du tableau est : " . count($liste) . "<br>";


// Tableau multidimensionnel


$tab_multi = array(
    0 => array("prenom" => "Julien", "nom" => "DUJEAN"),
    1 => array("prenom" => "Philippe", "nom" => "MARK"),
    2 => array("prenom" => "Maxime", "nom" => "GALLET"),
    3 => array("prenom" => "Xavier", "nom" => "COTTET"),
);

echo "<pre>";
print_r($tab_multi);
echo "</pre>";

for($i = 0; $i < count($tab_multi); $i++)
{
    echo $tab_multi[$i]['prenom'] . "<br>";
}


echo '<hr><h2>Les objets</h2>';


class Etudiant
{
    public $prenom = 'Robert';
    protected $nom = 'ALAIN';
    private $age = 22;

    public function pays()
    {
        return "France";
    }
}

$etudiant1 = new Etudiant();

echo $etudiant1 -> prenom;

echo '<br>';

echo $etudiant1 -> pays();














