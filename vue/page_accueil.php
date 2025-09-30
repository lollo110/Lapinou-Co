<?php
require_once '../inc/haut.inc.php';
?>

    <div class="container my-4">

        <!-- Carrousel -->
        <div id="carouselExampleIndicators" class="carousel slide mb-5">
            <!-- Boutons indicateurs -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            </div>

    
<!-- Images -->
<div class="carousel-inner rounded">
  <div class="carousel-item active">
    <img src="<?= BASE_URL ?>assets/img/carrousel_2.png" class="d-block w-100 img-fluid" alt="image1" style="height: 70vh; object-fit: cover;">
  </div>
  <div class="carousel-item">
    <img src="<?= BASE_URL ?>assets/img/carrousel_1.png" class="d-block w-100 img-fluid" alt="image2" style="height: 70vh; object-fit: cover;">
  </div>
</div>


            <!-- Flèches -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Cards -->
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <a class="text-decoration-none" href="<?= BASE_URL ?>model/traitement.php?produit=jouets">
                    <div class="card h-100">
                        <img src="<?= BASE_URL ?>assets/img/category_jouets.png" class="card-img-top" alt="Card 1">
                        <div class="card-body">
                            <h5 class="card-title">Jouets</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a class="text-decoration-none" href="<?= BASE_URL ?>model/traitement.php?produit=accessoires">
                    <div class="card h-100">
                        <img src="<?= BASE_URL ?>assets/img/category_accessoires.png" class="card-img-top" alt="Card 2">
                        <div class="card-body">
                            <h5 class="card-title">Accessoires</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a class="text-decoration-none" href="<?= BASE_URL ?>model/traitement.php?produit=nourritures">
                    <div class="card h-100">
                        <img src="<?= BASE_URL ?>assets/img/category_nourriture.png" class="card-img-top" alt="Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Nourriture</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

<?php
require_once '../inc/bas.inc.php';
?>