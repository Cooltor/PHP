<?php

if($_POST) {

    echo "nom : ".$_POST["nom"]."<br>";
    echo "prenom : ".$_POST["prenom"]."<br>";
    echo "adresse : ".$_POST["adresse"]."<br>";
    echo "ville : ".$_POST["ville"]."<br>";
    echo "code postal : ".$_POST["cp"]."<br>";
    echo "pays : ".$_POST["nom"]."<br>";
}

if(!empty($_POST['pseudo']))
{
    echo "nom : " . $_POST['nom'] . "<br>";
}else{
    echo "Le nom est obligatire <br>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Créer un formulaire d'inscription avec les champs nom, prénom, adresse, ville, code postal et pays. Récupérer les saisies juste au-dessus en précisant l'étiquette correspondante. c'est-à-dire nom : COTTET , prenom: Julien ......
    </p>

    <h1>Formulaire</h1>
    <form action="" method="POST">

    <label for="nom">Nom :</label><br>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="prenom">Prénom :</label><br>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="adresse">Adresse :</label><br>
    <input type="text" name="adresse" id="adresse"><br><br>

    <label for="ville">Ville :</label><br>
    <input type="text" name="ville" id="ville"><br><br>

    <label for="cp">CP :</label><br>
    <input type="number" name="cp" id="cp"><br><br>

    <label for="pays">Pays :</label><br>
    <input type="text" name="pays" id="pays"><br><br>

    <input type="submit">


    </form>
    
</body>
</html>