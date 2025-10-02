<?php
require_once '../inc/haut.inc.php';
?>


<?php 

if(isset($_GET["connexion"])&& $_GET["connexion"] == "false"){
?>

<p class="text-center" style="color:red">Email ou Mot de passe incorrect</p>

<?php } ?>

<form class="w-50 mx-auto py-5" method="POST" action="<?= BASE_URL ?>model/traitement.php">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
 <input class=" btn btn-success" type="submit" name="form_connexion" value="Se Connecter">
</form>





<?php
require_once '../inc/bas.inc.php';
?>
