<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un stagiaire</title>
</head>
<body>
<h1>Ajouter un nouvel utilisateur</h1>
<form action="action.php" method="POST">
    <label for="firstName">Nom</label>
    <input type="text" id="firstName" name="nom" required>

    <label for="lastName">Prénom</label>
    <input type="text" id="lastName" name="prenom" required>

    <label for="age">Âge</label>
    <input type="number" id="age" name="age" min="1" max="130" required>

    <label for="mail">E-mail</label>
    <input type="email" id="mail" name="email" required>

    <button type="submit" name="btn_create">Envoyer</button>
</form>
</body>
</html>