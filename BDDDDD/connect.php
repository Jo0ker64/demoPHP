<?php
$host = 'localhost';
$dbname = 'demo1';
$username = 'demo1';
$password = 'demo';

try {
    // Tentative de connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Afficher les erreurs de PDO
} catch (PDOException $e) {
    // Afficher l'erreur de connexion et arrêter l'exécution du script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}