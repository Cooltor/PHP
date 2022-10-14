<?php

if($_POST){
    echo $_POST['destinataire']."<br>";
    echo $_POST['expediteur']."<br>";
    echo $_POST['subject']."<br>";
    echo $_POST['message']."<br>";

//     $_POST['expediteur'] = 'From:'.$_POST['expediteur'];

//     if(mail($_POST['destinataire'], $_POST['subject'],$_POST['message'], $_POST['expediteur'])){
//         echo "Mail envoyé";
//     }else{
//         echo "erreur";
//     }
// }

    $dest = $_POST['destinataire'];
    $objet = $_POST['subject'];
    $message = $_POST['message']."<br>";
    $entetes = $_POST['expediteur'];
    
    if (mail($dest, $objet, $message, $entetes))
        echo "Mail envoyé avec succès.";
    else
        echo "Un problème est survenu.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire mail</title>
</head>
<body>

    <form action="" method="POST">

        <label for="destinataire">Destinataire</label><br>
        <input type="text" name="destinataire" id="destinataire"> <br>

        <label for="expediteur">Expediteur</label><br>
        <input type="text" name="expediteur" id="expediteur"> <br>

        <label for="subject">Objet du message :</label><br>
        <input type="text" name="subject" id="subject"> <br>

        <label for="message">Message :</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea> <br>

        <input type="submit" value="envoyer">

    </form>

    
</body>
</html>