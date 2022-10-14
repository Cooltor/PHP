<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire4</title>
</head>
<body>
    <p>Vous avez bien transmis les infos suivantes :</p>

    <p>
        <?php

            if(!empty($_POST['Prenom']))
            {
                echo "Prenom : ".$_POST['prenom']."<br>";
            }
            else{
                echo "<p> Vous n'avez pas rempli le champs Prénom</p>";
            }
                echo "nom : ".$_POST['nom']."<br>";
            
                if(!empty($_POST['mail']))
            {
                echo "mail : ".$_POST['mail']."<br>";
            }
            else{
                echo "<p> Vous n'avez pas rempli le champs mail</p>";
            }
                echo "adresse : ".$_POST['adresse']."<br>";
                echo "Code postal : ".$_POST['zip']."<br>";
                echo "Ville : ".$_POST['ville']."<br>";
                echo "pays : ".$_POST['pays']."<br>";
                echo "description : ".$_POST['description']."<br>";

            //Permet d'ouvrir un fichier en mode 'a' fopen() ouvre le fichier s'il existe ou créer le fichier s'il n'existe pas.
            $f = fopen('liste.txt', 'a');
                 fwrite($f, $_POST['prenom']."- -"); // fwrite() permet d'écrire dans un fichier
                 fwrite($f, $_POST['nom']."- - \n");
                 fwrite($f, $_POST['mail']."- - \n");
                 fwrite($f, $_POST['adresse']."- - \n");
                 fwrite($f, $_POST['zip']."- - \n");
                 fwrite($f, $_POST['pays']."- - \n");
                 fwrite($f, $_POST['description']."- - \n");
            $f = fclose($f);// fclose() permet de fermer le fichier
           
        ?>
    </p>
    
</body>
</html>