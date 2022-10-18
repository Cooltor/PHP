<?php



if($_POST)
{
// echo "Nom :" . $_POST['nom'] . " " . $_POST['prenom'] . " " . $_POST['adresse'] . " " . $_POST['ville'] . " " . $_POST['postal'] . " " . $_POST['pays'] . "<br>";
echo "Nom :" . " " . $_POST['nom'] . "<br>";
echo "Prénom :" . " " . $_POST['prenom']  . "<br>";
echo "Adresse :" . " " . $_POST['adresse']  . "<br>";
echo "Ville :" . " " . $_POST['ville']  . "<br>";
echo "Code Postal :" . " " . $_POST['postal'] . "<br>";
echo "Pays :" . " " . $_POST['pays'] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 2</title>
</head>
<body>
    <p>Créer un formulaire d'inscription avec les champs nom, prénom, adresse, ville, code postal et pays. Récupérer les saisies juste au-dessus en précisant l'étiquette correspondante. C'est à dire nom : COTTET, prénom : Julien... </p>

    <h1>Formulaire</h1>

    <form action="" method="POST">
        <label for="prenom">Nom : </label> <br>
        <input type="text" name="nom" id="prenom"><br>

        <label for="prenom">Prénom : </label> <br>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="adresse">Adresse : </label> <br>
        <input type="text" name="adresse" id="prenom"><br>

        <label for="ville">Ville : </label> <br>
        <input type="text" name="ville" id="prenom"><br>

        <label for="postal">Code Postal : </label> <br>
        <input type="num" name="postal" id="prenom"><br>

        <label for="pays">Pays : </label> <br>
        <input type="text" name="pays" id="prenom"><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>