<?php
require_once 'bddddd/connect.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Récupérer les données du stagiaire
    $sql = "SELECT * FROM stagiaire WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $stagiaire = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$stagiaire) {
        echo "Stagiaire introuvable.";
        exit();
    }
} else {
    echo "ID manquant.";
    exit();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Modifier un utilisateur</title>
</head>
<body>
<h1>Modifier un utilisateur</h1>
<form action="action.php" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($stagiaire['id']) ?>">

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($stagiaire['nom']) ?>" required>

    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($stagiaire['prenom']) ?>" required>

    <label for="age">Âge</label>
    <input type="number" id="age" name="age" value="<?= htmlspecialchars($stagiaire['age']) ?>" min="1" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($stagiaire['mail']) ?>" required>

    <button type="submit" name="btn_update">Modifier</button>
</form>
</body>
</html>