<?php

if (!isset($_GET['produit'])) {
    header('Location: ../vue/page_accueil.php');
    exit;
}
require_once __DIR__ . "/../inc/haut.inc.php"; ?>


<?php
if (isset($_GET['produit']) && $_GET['produit'] == 'jouets') {
  $resultat = executeRequete("SELECT * FROM jouet",[]);
  $produits = $resultat->fetchAll();
  $img = 'jouets';
}
if ($_GET['produit'] == 'accessoires') {
  $resultat = executeRequete("SELECT * FROM accessoire",[]);
  $produits = $resultat->fetchAll();
  $img = 'accessoires';
}
if ($_GET['produit'] == 'nourritures') {
  $resultat = executeRequete("SELECT * FROM nourriture",[]);
  $produits = $resultat->fetchAll();
  $img = 'nourritures';
}

foreach ($produits as $value) {
  foreach ($value as $key => $v) {
    $value[$key] = htmlspecialchars($v, ENT_QUOTES);
  }
}



?>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
  body {
    background-color: #f8f9fa;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }

  h1{
    font-family: "Bangers", system-ui;
    -webkit-text-stroke: 1.5px black;
    text-shadow: 0px 0px 10px black;
    color: white;
    font-size: 4em;
  }

  h1 img{
    width: 50%;
  }

  .product-card {
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background: #fff;
    position: relative;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  .product-img {
    max-height: 180px;
    object-fit: contain;
    background: #ffffffff;
    padding: 10px;
  }

  .card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #222;
  }

  .product-rating {
    color: #ffc107;
    font-size: 1rem;
    margin-bottom: 10px;
  }

  .product-price {
    font-size: 1.3rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  .btn-custom {
    border-radius: 25px;
    padding: 8px 16px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    color: #ffffffff;
    background-color: #e2b881 ;
    border: none;
     cursor: url("<?= BASE_URL ?>assets/img/carrot_pointer.png"), auto;
  }

  .btn-custom:hover {
    transform: scale(1.05);
    background-color:#6d584f;
     cursor: url("<?= BASE_URL ?>assets/img/carrot_pointer.png"), auto;
  }

      .btn-custom:active{
        cursor: url("<?= BASE_URL ?>assets/img/carrot_cursor_mange_noback.jpeg"), auto;
        
      }
</style>
</head>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-5">NOS <?= strtoupper($_GET['produit']); ?></h1>

    <div class="row g-4">
      <!-- Produit 1 -->
      <?php  foreach ($produits as $p) { ?>

      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="<?= BASE_URL ?>assets/img/<?= $img; ?>/<?= $p['image']; ?>" class="card-img-top product-img"
            alt="Tunnel en osier">
          <div class="card-body">
            <h5 class="card-title"><?= $p['nom']?></h5>
            <p class="product-rating">⭐⭐⭐⭐⭐</p>
            <p class="product-price"><?= number_format($p['prix'], 2)?> €</p>
            <a href="./details.php?produit=<?= $_GET['produit']; ?>&id=<?= $p['id']; ?>" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

            <?php } ?>
    </div>
  </div>
  <?php require_once __DIR__ . "/../inc/bas.inc.php" ?>