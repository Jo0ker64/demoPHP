<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un nouvel utilisateur</h1>
        <form action="action.php">
            <label for="ID">ID</label>
            <input type="hidden" id="ID">

            <label for="firstName">Nom</label>
            <input type="text" id="firstName" name="nom">

            <label for="lastName">Prénom</label>
            <input type="text" id="lastName" name="prenom">

            <label for="age">Âge</label>
            <input type="number" id="age" name="age">
            <label for="mail">E-mail</label>

            <input type="email" id="mail" name="email">
            <input type="submit" value="Envoyer" name="btn_create">
        </form>

</body>
</html>



