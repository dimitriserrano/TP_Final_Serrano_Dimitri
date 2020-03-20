<?php
require_once '../functions/db.php';
require_once '../functions/utils.php';
require_once '../views/layout/header.php';
?>

<h1>Inscription</h1>
<h4>Rejoins nous !!!</h4>

<form action="insert.php" method="POST">
  <div class="form-group">
    <label for="nom">Login</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Login...">
  </div>
  <div class="form-group">
    <label for="passw">Mot de passe</label>
    <input type="password" class="form-control" id="passw" name="passw" placeholder="Mot de passe..." />
  </div>
  <div class="form-group">
    <label for="passw">Confirmer mot de passe</label>
    <input type="password" class="form-control" id="passw" name="passw" placeholder="Confirmer mot de passe..." />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email..." />
  </div>
  <button type="submit" class="btn btn-primary">Créer un compte</button>
</form>

<?php require_once '../views/layout/footer.php'; ?>