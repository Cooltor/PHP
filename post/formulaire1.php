<?php


// $_POST est une supergolobale, donc un array()
// Permet de récupérer des informations en POST depuis un formulaire 
if($_POST) // Au clic sur le bouton 
{
echo $_POST['prenom'] . " " . $_POST['description'] . "<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="" method="POST"> <!-- method : comment les données vont circuler // action : dans quel fichier le traitement sera fait -->
        <label for="prenom">Prenom : </label> <br>
        <input type="text" name="prenom" id="prenom"><br> <!-- Il ne faut pas oublier le name -->

        <label for="description">Description : </label> <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Envoyer">


    </form>
</body>
</html>