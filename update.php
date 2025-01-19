<?php
    require_once 'bddddd/connect.php';
    if (isset($_GET['id'])) {
        var_dump($_GET['id']);
        $id = $_GET['id'];
        $sql = "SELECT * FROM stagiaire WHERE stagiaire.id = " .$id . "LIMIT 1";
        var_dump($sql);
        $data = $pdo->query($sql);
        var_dump($data);
        $stagiaire = $data -> fetch(PDO::FETCH_ASSOC);
        var_dump($stagiaire);
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
    <title>Document</title>
</head>
<body>
<h1>Modifier un utilisateur</h1>
    <?php
        var_dump($_GET);
    ?>
</body>
</html>
