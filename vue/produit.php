<?php require_once __DIR__ . "/../inc/haut.inc.php"; ?>
  
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    h1 {
      font-weight: bold;
      color: #333;
    }

    .product-card {
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background: #fff;
      position: relative;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    .product-img {
      max-height: 180px;
      object-fit: contain;
      background: #ebebd8ff;
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
      color:#333 ;
      margin-bottom: 10px;
    }

    .btn-custom {
      border-radius: 25px;
      padding: 8px 16px;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      color: #ffffffff;
      background-color:#6d584f;
      border: none;
    }

    .btn-custom:hover {
      transform: scale(1.05);
      background-color: #e2b881;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-5">✨ Nos Produits ✨</h1>

    <div class="row g-4">
      <!-- Produit 1 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/VIV9343-2-removebg-preview.png" class="card-img-top product-img" alt="Tunnel en osier">
          <div class="card-body">
            <h5 class="card-title">Tunnel en osier</h5>
            <p class="product-rating">⭐⭐⭐⭐⭐</p>
            <p class="product-price">21,00 €</p>
            <a href="./details.php?id=1" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 2 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/Passerelle-7-removebg-preview.png" class="card-img-top product-img" alt="Passerelle">
          <div class="card-body">
            <h5 class="card-title">Passerelle</h5>
            <p class="product-rating">⭐⭐⭐⭐</p>
            <p class="product-price">14,80 €</p>
            <a href="./details.php?id=2" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 3 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/Jungle-infernale-removebg-preview.png" class="card-img-top product-img" alt="La table Canopée">
          <div class="card-body">
            <h5 class="card-title">La table Canopée</h5>
            <p class="product-rating">⭐⭐⭐⭐⭐</p>
            <p class="product-price">52,00 €</p>
            <a href="./details.php?id=3" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 4 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/trio-2-scaled-removebg-preview.png" class="card-img-top product-img" alt="Trio de balles">
          <div class="card-body">
            <h5 class="card-title">Trio de balles</h5>
            <p class="product-rating">⭐⭐⭐⭐⭐</p>
            <p class="product-price">9,90 €</p>
            <a href="./details.php?id=4" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 5 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/Bascule-krokmou-1-2-removebg-preview.png" class="card-img-top product-img" alt="Bascule Krokmou">
          <div class="card-body">
            <h5 class="card-title">Bascule Krokmou</h5>
            <p class="product-rating">⭐⭐⭐</p>
            <p class="product-price">36,00 €</p>
            <a href="./details.php?id=5" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 6 -->
      <div class="col-md-4">
        <div class="card product-card text-center">
          <img src="../assets/img/Jeu-bac-10-2-removebg-preview.png" class="card-img-top product-img" alt="Jeu en bois le Bac +10">
          <div class="card-body">
            <h5 class="card-title">Jeu en bois le « Bac +10 »</h5>
            <p class="product-rating">⭐⭐⭐⭐</p>
            <p class="product-price">18,90 €</p>
            <a href="./details.php?id=6" class="btn btn-primary btn-custom">Détails du Produit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once __DIR__ . "/../inc/bas.inc.php" ?>
