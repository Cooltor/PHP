

<?php

if($_POST){

    if(!empty($_POST['pseudo']))
    {
        echo "Pseudo : " . $_POST['pseudo'] . "<br>";
    }else{
        echo "Le pseudo est obligatire <br>";
    }
    
    
    
    if(!empty($_POST['email']))
    {
        echo "E-mail : " . $_POST['email'] . "<br>";
    }else{
        echo "Le mail est obligatire <br>";
    }

//  fopen() permet d'ouvrir un fichier. en mode "a" fopen() ouvre le fichier si le fichier existe ou crée le fichier s'il n'existe pas
    $f = fopen('liste.txt', 'a');
        fwrite($f,$_POST['pseudo'] . "- - "); // fwrite() permet d'écrire dans un fichier
        fwrite($f,$_POST['email'] . "- - ");
    $f = fclose($f); // fclose() permet de fermer le fichier
}

?>