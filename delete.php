<?php
require_once 'BDDDDD/connect.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Préparer la requête SQL pour supprimer l'enregistrement
    $sql = "DELETE FROM stagiaire WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([':id' => $id])) {

        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Erreur lors de la suppression de l'enregistrement.";
    }
} else {
    echo "Aucun ID spécifié.";
}
