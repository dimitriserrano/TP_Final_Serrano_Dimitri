<?php
require_once '../../functions/utils.php';
// Vérification de la connexion avant même toute sortie de code (require, doctype, etc...)
session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
  echo "Vous êtes connecté";
} else {
  redirect('/admin/login.php');
}

require_once '../../views/layout/header.php';
require_once '../../views/layout/footer.php';
