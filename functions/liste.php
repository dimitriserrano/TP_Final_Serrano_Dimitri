<?php
require_once __DIR__ . "/db.php";

function getusers(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM users");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}