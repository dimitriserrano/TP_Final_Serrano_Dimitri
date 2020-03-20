<?php

require_once '../functions/db.php';

if (!empty($_POST) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $pdo = getPdo();

    $query = 'INSERT INTO newsletter (email) VALUES (:email)';
    $stmt = $pdo->prepare($query);

    $insert = $stmt->execute([
        'email' => $email
    ]);
}

echo ($insert) ? "Insertion OK" : "Insertion échouée";