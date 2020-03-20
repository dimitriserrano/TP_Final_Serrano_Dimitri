<?php

require_once '../functions/db.php';

if (!empty($_POST) && !empty($_POST['nom']) && !empty($_POST['passw']) && !empty($_POST['email'])) {
    $nom = $_POST['nom'];
    $passw = $_POST['passw'];
    $email = $_POST['email'];
  }

$pdo = getPdo();

$query = 'INSERT INTO users (nom, passw, email, active) VALUES (:nom, :passw, :email, :active)';
$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
    'nom' => $nom,
    'passw' => password_hash($passw, PASSWORD_BCRYPT, ['cost' => 12]),
    'email' => $email,
    'active' => 1
]);

echo ($insert) ? "Insertion OK" : "Insertion échouée";