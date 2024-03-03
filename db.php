<?php
/* Database connexion */
$sereur ="localhost";
$nom_utilisateur = "root";
$mot_passe = "";
$nom_base_donnee = "application_collaborative";

    $connexion = new mysqli($sereur,$nom_utilisateur,$mot_passe,$nom_base_donnee);
   if ($connexion->connect_error) {
    die("la connexion à la base de donnée a échoué:" . $connexion->connect_error);
   }
    echo "connexion à la base de données avec succés. ";
?>