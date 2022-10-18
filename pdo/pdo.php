<?php

// Connexion à notre BDD

// $pdo = new PDO() permet d'instancier la calsse PDO
// L'hote : localhost dans notre cas, car nous sommes sur le erveur local
// dbnam : le nom de la bdd qu'on veut utiliser
// Login : root
// Mot de passe : "" sur windows et "root" sur mac
$pdo = new PDO(
    "mysql:host=localhost;dbname=entreprise","root","",
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // emet un avertissement sur les erreurs sql
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // Utiliser l'encodage utf8 lors des échanges avec la bdd
    )
);

var_dump($pdo);


// echo "<pre>";
// print_r(get_declared_classes());
// echo "</pre>";


// echo "<pre>";
// print_r(get_class_methods($pdo));
// echo "</pre>";

////////////////////////////////// EXEC
    // EXEC() est utiliser pour la formulation de req ne renvoyant pas de résultat
    // EXEC() renvoie le nombre de ligne affectées par ma req

    echo "<h2> exec() </h2>";

    // $resultat = $pdo->exec('INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES ("Maxime", "DUMOND","m", "Dev","2010-05-20", 4000)');

    echo "<br>";
    // echo "Nombre d'enregistrement affecté par ma req" .$resultat;

    echo "<br>";
    // echo "Dernier id : " . $pdo->lastInsertId(); // Pour avoir le dernier id qui a été inséré

    // Update le salaire de l'employé qui a l'id 739 à 2500

    // $resultat = $pdo->exec('UPDATE employes SET salaire = 2500 WHERE id_employes = 739');

    echo "<br>";


echo "<h2> query() </h2>";

// Query() est utilisé pour la formulation de req retournant un ou plusieurs résultat

$resultat = $pdo->query("SELECT * FROM employes WHERE prenom = 'Chloe'");

var_dump($resultat); // Est un objet PDOStatement qui contient le résultat

// Fetch permet de traiter ele résultat qui est sous forme d'un objet PDOStatement et de le rendre exploitable


$employe = $resultat->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($employe);
echo "</pre>";

// PDO::FETCH_ASSOC retourn un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats

// PDO::FETCH_BOTH (defaut): retourne un tablea indexé par les noms de colonnes et aussi pas les numéros de colonnes, commençant à l'index 0, comm retournés dans le jeu de résultats.

// PDO::FETCH_NUM : retourne un tableau indexé par le numéro de la colonne comme elle este retournée dans votre jeu de résultat, commençant par 0


echo "<h2> FETCHALL() </h2>";

$red = $pdo->query("SELECT * FROM employes");

$donnee = $red->fetchAll(PDO::FETCH_ASSOC);
// fetchAll() retourne le résultat dans un tableau multidimensionnel

// echo "<pre>";
// print_r($donnee);
// echo "</pre>";

// foreach($donnee as $index => $valeur)
// {
//     echo "<div>";
//     foreach($valeur as $key=>$data)
//     {
//         echo "$key : $data <br>";
//     }
//     echo "</div>";

// }


// foreach($donnee as $index => $valeur)
// {
// echo "<table border=2>";
    
//     echo "<tr>";
//     foreach($valeur as $key => $data)
//     {
//         echo " <th>$key </th> <td> $data </td> <br>";
//     }
//     echo "</tr>";
// echo "</table>";
    
// }

// Afficher dans un tableau HTMl toutes les infos des employés de notre BDD

$res = $pdo->query("SELECT * FROM employes");

echo "<table border=\'2\'><tr>";

for($i = 0; $i < $res->columnCount(); $i++)
{
    $colonne = $res->getColumnMeta($i);
    echo "<th>".$colonne['name']."</th>";
}
echo '</tr>';
while($ligne = $res->fetch(PDO::FETCH_ASSOC))
{
    echo '<tr>';
        foreach($ligne as $key=>$info)
        {
            echo '<td>' . $info . '</td>'; 
        }
    echo '</tr>';

}

echo '</table>';



echo "<h2> PREPARE et EXECUTE </h2>";

// PREPARE() permet de préparer la req

// EXECUTE() permet d'exécuter la req préparée
// Il est recommandé d'utiliser les req préparées si on exécute plusieurs fois la même req
// Cela nous évite de refaire le cycle : Analyse / Interprétation / Exécution

// Les req préparées permettent d'éviter les injections SQL

// PREPARE et EXECUTE avec BINDPARAM

$nom = 'Collier';

$reqprep = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom'); // Je prépare ma req et je lui passe le marqueur nominatif qui est :nom

$reqprep->bindParam(':nom',$nom,PDO::PARAM_STR); // bindParam() reçoit une variable

$reqprep->execute(); // J'exécute ma req

$user = $reqprep->fetch(PDO::FETCH_ASSOC);

echo implode(' ', $user);

echo "<br>";



// PREPARE et EXECUTE avec BINDVALUE
$prenom = "Emilie";

$mareq = $pdo->prepare('SELECT * FROM employes WHERE prenom = :prenom'); // Je prépare ma req avec le marqueur nominatif

$mareq->bindValue(':prenom', 'Nathalie', PDO::PARAM_STR); // bindValue() reçoit une variable ou une valeur 
// $mareq->bindValue(':prenom', $prenom, PDO::PARAM_STR);


$mareq-> execute(); // J'exécute

$infoUser = $mareq->fetch(PDO::FETCH_ASSOC);

echo implode('/',$infoUser);

?>