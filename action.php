<?php
// Connexion à la base de données
require_once 'BDDDDD/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ajouter un stagiaire
    if (isset($_POST['btn_create'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $age = (int)$_POST['age'];
        $email = htmlspecialchars($_POST['email']);

        if (!empty($nom) && !empty($prenom) && $age > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                $sql = "INSERT INTO stagiaire (nom, prenom, age, mail) VALUES (:nom, :prenom, :age, :mail)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':age' => $age,
                    ':mail' => $email
                ]);
                header('Location: index.php?message=success');
                exit();
            } catch (PDOException $e) {
                echo "Erreur lors de l'insertion : " . $e->getMessage();
            }
        } else {
            echo "Veuillez remplir tous les champs correctement.";
        }
    }

    // Modifier un stagiaire
    if (isset($_POST['btn_update'])) {
        $id = (int)$_POST['id'];
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $age = (int)$_POST['age'];
        $email = htmlspecialchars($_POST['email']);

        if (!empty($id) && !empty($nom) && !empty($prenom) && $age > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                $sql = "UPDATE stagiaire SET nom = :nom, prenom = :prenom, age = :age, mail = :mail WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':id' => $id,
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':age' => $age,
                    ':mail' => $email
                ]);
                header('Location: index.php?message=update_success');
                exit();
            } catch (PDOException $e) {
                echo "Erreur lors de la mise à jour : " . $e->getMessage();
            }
        } else {
            echo "Veuillez remplir tous les champs correctement.";
        }
    }

    // Supprimer un stagiaire
    if (isset($_POST['btn_delete'])) {
        $id = (int)$_POST['id'];

        if (!empty($id)) {
            try {
                $sql = "DELETE FROM stagiaire WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                header('Location: index.php?message=delete_success');
                exit();
            } catch (PDOException $e) {
                echo "Erreur lors de la suppression : " . $e->getMessage();
            }
        } else {
            echo "ID invalide pour la suppression.";
        }
    }
} else {
    echo "Accès non autorisé.";
}
