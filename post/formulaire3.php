<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
    Réaliser un formulaire avec les champs pseudo et email. Puis récupérer et afficher les informations directement sur la page formulaire4.php.
    Faites en sorte d'informer l'internaute qu'il faut saisir un pseudo dans le cas où le champ est laissé vide.
    </p>

    <h1>Formulaire 3 en POST</h1>

    <form action="formulaire4.php" method="post">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo"><br><br>

        <label for="email">E-mail</label><br>
        <input type="email" name="email"><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>