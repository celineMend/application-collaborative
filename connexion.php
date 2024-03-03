<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Boîte à Idées Collaborative</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contain">
        <form action="idee.php" method="post">
            <fieldset>
                <legend>connexion</legend>
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur:</label>
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit">Se connecter</button>
            </fieldset>
        </form>
        <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a></p>
        <p>connexion réussie !<a href = "idee.php">continuer vers la page idée </a></p>
    </div>
</body>
</html>

