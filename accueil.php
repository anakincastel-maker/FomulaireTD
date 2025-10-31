<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <style>
body {
    text-align: center;
    font-family: Arial, sans-serif;
    margin-top: 50px;
}
</style>
</head>
<body>
<?php
$nom = $_POST['nom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$genre = $_POST['genre'];
$categorie = $_POST['categorie'];

if (strlen($mdp) < 10) {
    echo "<h3 style='color:red;'>Erreur : le mot de passe doit contenir au moins 10 caractères.</h3>";
    echo "<a href='index.php'>Retour</a>";
    exit;
}

switch ($categorie) {
    case 'cadre':
        $cout = 50;
        break;
    case 'ouvrier':
        $cout = 10;
        break;
    case 'sans emploi':
        $cout = 0;
        break;
    default:
        $cout = 20;
        break;
}

echo "<h2>Bonjour $genre $nom</h2>";
echo "<p>Coût d'inscription : $cout €</p>";
?>

<form action="confirmer.php" method="post">
    <input type="hidden" name="nom" value="<?php echo $nom; ?>">
    <input type="hidden" name="login" value="<?php echo $login; ?>">
    <input type="hidden" name="mdp" value="<?php echo $mdp; ?>">
    <input type="hidden" name="genre" value="<?php echo $genre; ?>">
    <input type="hidden" name="categorie" value="<?php echo $categorie; ?>">
    <input type="hidden" name="cout" value="<?php echo $cout; ?>">

    <input type="submit" value="CONFIRMER">
</form>
</body>
</html>
