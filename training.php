<style>
    h2{
        margin: 0;
        font-size: 15px;
        color: red;
        text-align: center;
    }
</style>

<h2>Ecriture et affichage</h2>

<?php

echo 'Bonjour tout le monde'; // echo est une instruction d'affichage
echo '<h3> Hello... </h3>'; // echo interprète le html
print 'Salut'; // print fait la même chose que echo

echo '<hr> <h2> Les commentaires </h2>';

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

echo '<hr><h2>Les variables / Types / Déclaration / Affectation</h2>'; // Une variable est un espace nommé permettant de stocker une valeur

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











