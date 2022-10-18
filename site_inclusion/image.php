<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=phpimage",
    "root",
    "",
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    )
);




if (!empty($_FILES['img'])) // $_FILES est une superglobale qui permet de manipuler les fichiers
{
    echo "<pre>";
    print_r($_FILES['img']); //$_FILES['img'] permet de récupérer les info de l'input type file qui contient notre image à télécharger dont le name est img
    echo "</pre>";

    $nomImg = time() . '_' . rand() . '_' . $_FILES['img']['name']; // nous allons renommer cnotre image pour ne pas avoir des images du même nom

    echo $nomImg;

    define('URL', 'http://localhost/php/' ); // Je prépare le chemin de l'image dans la bdd

    $img_bdd = URL . "dossier_image/$nomImg"; // Je finalise le chemin d'accès dans la bdd

    echo $_SERVER['DOCUMENT_ROOT'];

    define("BASE",$_SERVER['DOCUMENT_ROOT'] . '/php/'); // Je prépare le chemin de l'image dans le dossier qui est sur le serveur.copy() prend 2 arguments : le nom temporaire et le chemin

    echo BASE;

    $img_doc = BASE ."dossier_image/$nomImg"; // Je finalise le chemin sur le serveur

    // copy($_FILES['img']['tmp_name'],$img_doc); // J'utilise la fonction copy() pour copier l'image dans un dosier qui est sur le serveur.

    // $pdo->query("INSERT INTO picture(nom_image) VALUES('$img_bdd')"); // Je fais la req pour enregistrer le chemin de l'image dans la bdd

    if($_FILES['img']['size'] <= 8000000) // Si la taille est inférieur à 8mo
    {
        // pathinfo() donne des infos sur un chemin
        $info = pathinfo($_FILES['img']['name']);
        echo "<pre>";
        print_r($info);
        echo "</pre>";

        $ext = $info['extension']; // Je récupère l'extension de mon image dans une variable

        $tabExt = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF', 'Jpg', 'Png', 'Jpeg', 'Gif']; // Tableau contenant la liste des extensions que j'autorise

        if(in_array($ext, $tabExt)) // in_array() vérifie si une valeur est dans un tableau
        {
            copy($_FILES['img']['tmp_name'],$img_doc);
            $pdo->query("INSERT INTO picture(nom_image) VALUES('$img_bdd')");
        } else {
            echo "Format non autorisé";
        }

    } else {
        echo "Vérifier la taille de votre image";
    }

}


?>



    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP images</title>
</head>
<body>
    <h1>Les images en PHP</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id="img"><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>