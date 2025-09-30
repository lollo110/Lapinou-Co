<?php require_once __DIR__ . "/../inc/haut.inc.php"; ?>


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
  body {
    background-color: #f8f9fa;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
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
  }

  .btn-custom:hover {
    transform: scale(1.05);
    background-color:#6d584f;
  }
</style>
</head>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-5"><img src="" alt=""></h1>

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
            <p class="product-price"><?= $p['prix']?> €</p>
            <a href="./details.php?produit=<?= $_GET['produit']; ?>&id=<?= $p['id']; ?>" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

            <?php } ?>
    </div>
  </div>
  <?php require_once __DIR__ . "/../inc/bas.inc.php" ?>