<?php
require_once '../inc/haut.inc.php';
?>

<form class="w-50 mx-auto py-5" method="POST" action="<?= BASE_URL ?>model/traitement.php">
    <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" name="prenom">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
 <input class=" btn btn-success" type="submit" name="form_inscription" value="S'inscrire">
</form>

<?php

var_dump($_POST["nom"])
 ?>


<?php
require_once '../inc/bas.inc.php';
?>