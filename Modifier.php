<?php
    require_once "db.php";
    if(isset($_POST['Modifier'])){
    // Récupérer les valeurs du formulaire
    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $date_creation = $_POST["date_creation"];
    $date_cloture = $_POST["date_cloture"];
    $status = $_POST["status"];
    $id_utilisateur = $_POST["id_utilisateur"];

    $sql = "UPDATE idees SET titre_idee='$titre', description_idee='$description', date_creation='$date_creation', date_cloture='$date_cloture', status='$status', id_utilisateur='$id_utilisateur' WHERE id_idee= $id_idee";
    if (mysqli_query($connexion,$sql)) {
        // Redirection vers la page d'affichage après la mise à jour
        header('Location: affichage.php');
        die();
    } else {
        header('Location: affichage.php');
        die();
    }  

    
}

// Fermer la connexion à la base de données
$connexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boite à idé<embed src="" type=""></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    
   // $sql = "SELECT * FROM  utilisateur WHERE id_idee = $id_idee";
    //$result =mysqli_query($connexion,$sql);

    ?>
<h2>Modifier VOS IDEES</h2>
  <form action = "affichage.php" method="post">
    <fieldset>
    <div class = "contenu">
        <div class = "idée ">
            <div class = "création_idée">
            </div>
            <label for="">categorie</label>
            <input type="text" name ="categorie" class =" form-control">
        </div>

                <div class= "idée1">
                    <div class = "form">
                        <label>titre</label>
                        <input type="text"name ="titre"classe = "form-control">
                        <span class = " invalid-feedback"></span>
                        <label for="">date_creation</label>
                        <input type="date" name="date_creation"calsse= "form-control">
                        <label for="">date_cloture</label> 
                        <input type="date" name="date_cloture"classe="form-control">
                        <label for="">status</label>
                        <input type="text" name="status"classe = "form-control">
                        <label for="">id_utilisateur</label>
                        <input type="text" name="id_utilisateur"classe ="form_control">
                        <input type="submit" name="send" value="Modifier">

                    </div>
                    <div class="group_form">
                        <label for="">Description</label><br>
                        <textarea name="Description" id="" cols="30" rows="10" class="form-control"></textarea>
                        <span class="invalid-feeback"></span>

                    </div>
                </div>

            
     </div>
     <button name="envoyer" type="submit">Envoyer</button>
     <a class="link back" href="affichage.php"> Annuler</a>
    </fieldset>

    </div>
  </form>
  
  
</body>
</html>
