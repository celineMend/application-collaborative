<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Boîte à Idées Collaborative</title>
    <link rel="stylesheet" href="styles.css"> <!-- Inclure votre fichier CSS -->
</head>
<body>
<h1>veuillez saisir vos données </h1>
  <form action = "accueil.php" method="post">
    <fieldset>
    <legend>Inscription</legend>
    <label>Nom</label><input type="text" name="nom_utilisateur" placeholder="votre nom d'utilisateur"/><br>
    <label>Prenom</label><input type="text" name="prenom" placeholder="votre prenom "/><br>
    <label>Mon_passe</label><input type="text" name="mot_passe" placeholder="votre mon de passe"/><br>
    <label>Adresse_mail</label><input type="text" name="adresse_mail" placeholder="votre adresse mail"/><br><br>
    <input type="submit" name="envoyer" value="S'inscrire"/>
    </fieldset>
  </form>
  <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a></p>
     

</body>
</html>
