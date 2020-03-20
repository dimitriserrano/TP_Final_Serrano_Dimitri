<?php
require_once '../views/layout/header.php';
require_once '../functions/liste_email.php';
require_once '../functions/db.php';
$usr = getusers(); 
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($usr as $value) {?>
        <div class="card col-4">
        <div class="card-body">
          <h5 class="card-title">Email : <?php echo $value['email'];?></h5>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
require_once '../views/layout/footer.php'; ?>
