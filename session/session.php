<?php

session_start(); // permet de créer une session ou de l'ouvrir si elle existe déjà
// La session est stockée sur le serveur


$_SESSION['peusdo'] = 'Marc'; // $_SESSION est une superglobale donc un array
$_SESSION['mdp'] = 'Monmotdepasse'; 

// unset($_SESSION['mdp']); // unset() permet de vider une partie de la session

// session_destroy(); // Permet de détruire une session 

// Quand je crée une session, un cookie est automatiquement crée afin de maintenire le lien avec la session en cours sur le serveur. Ce cookie a le m^mee nom que la session
?>