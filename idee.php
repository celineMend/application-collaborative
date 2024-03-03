<?php
/* Database connexion */
require_once('db.php');

   if(isset($_POST['envoyer'])){

        $description = $_POST['Description'];
        $categorie = $_POST['categorie'];
        $titre = $_POST['titre'];
        $date_creation = $_POST['date_creation'];
        $date_cloture =$_POST['date_cloture'];
        $status =$_POST['status'];
        $id_utilisateur = (int)$_POST['id_utilisateur'];

        $sql = "INSERT INTO idees (titre_idee, description_idee, date_creation ,date_cloture , status, id_utilisateur ) VALUES ('$titre', '$description', '$date_creation','$date_cloture','$status','$id_utilisateur')";
        if (mysqli_query($connexion, $sql)) {
            header('Location: affichage.php');
        die();
            echo "Nouvelle  ajoutée avec succès.";
            
        } else {
            echo "Erreur : " . $sql . "<br>" . mysqli_error($connexion);
        }
    }
    
     
 


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
<h2>AJOUTER VOS IDEES</h2>
  <form action = "idee.php" method="post">
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
                        <input type="text"name ="titre" classe = "form-control">
                        <span class = " invalid-feedback"></span>
                        <label for="">date_creation</label>
                        <input type="date" name="date_creation"calsse= "form-control">
                        <label for="">date_cloture</label> 
                        <input type="date" name="date_cloture" classe="form-control">
                        <label for="">status</label>
                        <input type="text" name="status" classe = "form-control">
                        <label for="">id_utilisateur</label>
                        <input type="text" name="id_utilisateur" classe ="form_control">
                    </div>
                    <div class="group_form">
                        <label for="">Description</label><br>
                        <textarea name="Description" id="" cols="30" rows="10" class="form-control"></textarea>
                        <span class="invalid-feeback"></span>

                    </div>
                </div>

            
     </div>
     <button name="envoyer" type="submit">Validé</button>
     <a class="link back" href="affichage.php">Annuler</a>   
    </fieldset>

    </div>
  </form>
  
  
</body>
</html>
