<?php
require_once('db.php');

// Requête pour récupérer les idées
$sql = "SELECT * FROM idees";
$resultat = $connexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Idées</title>
    <link rel="stylesheet" href="affichage.css">
</head>
<body>
    <div class="container">
        <h2>Affichage des Idées</h2>
        <a class="link" href="idee.php">Ajouter</a>
        <table>
            <thead>
                
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>categorie</th>
                    <th>Date de création</th>
                    <th>Date de clôture</th>
                    <th>Statut</th>
                    <th>ID Utilisateur</th>
                    <th>modifier</th>
                    <th>supprimer</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="image"><a href="modifier.php?id="><<img src="../images/modification-icon-0.jpg" alt=" modifier">
                <td class="image"><a href="supprimer.php?id="><<img src="../images/delete-icon-image-17.jpg" alt=" Supprimer">
                <?php
                // Afficher les idées dans un tableau
                if ($resultat->num_rows > 0) {
                    while ($row = $resultat->fetch_assoc()) {
                        echo "<>";
                        echo "<td>" . $row['titre_idee'] . "</td>";
                        echo "<td>" . $row['description_idee'] . "</td>";
                        echo "<td>" . $row['categorie'] . "</td>";
                        echo "<td>" . $row['date_creation'] . "</td>";
                        echo "<td>" . $row['date_cloture'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td>" . $row['id_utilisateur'] . "</td>";
                        echo "<td class='image'><a href='modifier.php?id=" . $row['id_utilisateur'] . "'><img src='../images/modification-icon-0.jpg' alt='Modifier'></a></td>";
                        echo "<td class='image'><a href='supprimer.php?id=" . $row['id_utilisateur'] . "'><img src='../images/delete-icon-image-17.jpg' alt='Supprimer'></a></td>";
                        echo "</tr>";
                    }
                    
                } else {
                    echo "<tr><td colspan='6'>Aucune idée trouvée.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>