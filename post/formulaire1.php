<?php


// $_POST est une superglobale, donc un array()
// permet de récupérer les infos d'un form


if($_POST) {

echo $_POST['prenom'] . '<br>';
echo $_POST['description'] . '<br>';

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
    <form action="" method="POST"> <!--method: comment les données seront véhiculées -->

        <label for="prenom">Prénom :</label><br>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="ndescription">Description :</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Envoyer">

    </form>



</body>
</html>