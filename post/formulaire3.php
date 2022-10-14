<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>

    <style>
        input, textarea{
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    
    <h1>Formulaire</h1>

    <form action="formulaire4.php" method="POST"> <!-- method : comment les données vont circuler // action : dans quel fichier le traîtement sera fait -->
        <!-- Prenom -->
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"> <br> <!--  il ne faut pas oublier le name -->

        <!-- Nom -->
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"> <br>

        <!-- mail -->
        <label for="mail">mail :</label>
        <input type="email" name="mail" id="mail"> <br>

        <!-- adresse -->
        <label for="adresse">adresse :</label>
        <input type="text" name="adresse" id="adresse"> <br>

        <!-- zip -->
        <label for="zip">Code postal :</label>
        <input type="text" name="zip" id="zip"> <br>

        <!-- ville -->
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville"> <br>

        <!-- pays -->
        <label for="pays">Pays :</label>
        <input type="text" name="pays" id="pays"> <br>

        <!-- Description -->
        <label for="description">description :</label> <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea> <br>

        <!-- input submit -->
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>