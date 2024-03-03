<?php
// Votre code de connexion à la base de données
require_once('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_utilisateur'])) {
    $id_utilisateur = $_POST['id_utilisateur'];

    // Supprimer l'idée de la base de données
    $sql = "DELETE FROM idees WHERE id_utilisateur=$id_utilisateur";

    if ($connexion->query($sql) === TRUE) {
        echo "Idée supprimée avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $connexion->error;
    }
}

// Redirection vers la page d'affichage après la suppression
header("Location: affichage.php");
exit();
?>