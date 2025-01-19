<?php
//include laisse tout passer
//require
//require_once

require_once 'BDDDDD/connect.php';

$sql = "SELECT * FROM stagiaire";
//donc si je veux uniquement séléctionner le nom ou autre infos je fais SELECT (info) FROM (la table) WHERE id=(prendre l'id')
$data = $pdo->query($sql);
$stagiaires = $data->fetchAll(PDO::FETCH_ASSOC);
//var_dump($stagiaires);
//var_dump($stagiaires[0]['prenom']); // va sortir le prenom de l'id 0 dans la bdd

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Liste des CDA </title>
</head>
<body>
<h1>Liste des stagiaires CDA</h1>
<a class="create" href="create.php">Ajouter un stagiaire</a>

<table>
    <thead>
        <tr>
            <?php
                    foreach ($stagiaires[0] as $champ => $value) {
//                        var_dump($champ);
                        echo "<th scope='col'>$champ</th>";
                        //echo '<th>$champ</th>'; ne pas mettre des simple cote car la valeur ne sera pas interpreter
                    }
            ?>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php
            foreach ($stagiaires as $stagiaire) {
                echo '<tr>';
                echo '<td>' . $stagiaire['id'] . '</td>';
                echo '<td>' . $stagiaire['nom'] . '</td>';
                echo '<td>' . $stagiaire['prenom'] . '</td>';
                echo '<td>' . $stagiaire['age'] . '</td>';
                echo '<td>' . $stagiaire['mail'] . '</td>';
                echo '<td>  <a href="update.php?id='. $stagiaire["id"] .' ">Modifier le stagiaire</a> 
                        |   <a href="delete.php?='.$stagiaire["id"] .' ">Supprimer le stagiaire</a> </td>';
                echo '</tr>';
            }
        ?>

    </tbody>
</table>
<a href="delete.php?id=<?= $stagiaire['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?')">Supprimer</a>


<!--        --><?php
//            foreach ($stagiaires as $stagiaire) {
//                echo'<h1>' .$stagiaire['nom'] . '</h1>';
//
//        }
//        ?>

</body>
</html>


