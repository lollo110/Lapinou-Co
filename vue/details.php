<?php require_once __DIR__ . "/../inc/haut.inc.php" ?>

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .product-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      padding: 20px;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-10px);
    }

    .product-img {
      border-radius: 12px;
      max-height: 350px;
      object-fit: contain;
      background-color: #ebebd8ff ;
    }

    .product-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 15px;
      color: #222;
    }

    .product-price {
      font-size: 1.8rem;
      color: #000000ff;
      font-weight: bold;
      margin-top: 15px;
    }

    .product-rating {
      font-size: 1.2rem;
      color: #4b4b4aff;
    }

    .product-description {
      font-size: 1rem;
      line-height: 1.6;
      margin-top: 20px;
      color: #555;
    }

    .btn-custom {
      border-radius: 30px;
      padding: 10px 20px;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .btn-custom:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="container mt-5 py-5 mb-5">
    <div class="product-card row g-4 align-items-center">

      <!-- Image produit -->
      <div class="col-md-6 text-center m-auto">
        <img src="../assets/img/VIV9343-2-removebg-preview.png" class="product-img img-fluid shadow" alt="Tunnel en osier">
      </div>

      <!-- Infos produit -->
      <div class="col-md-6">
        <h2 class="product-title">Tunnel en osier</h2>
        <p class="product-rating">⭐⭐⭐⭐⭐ (25 avis)</p>
        <p class="product-price">21,00 €</p>

        <p class="product-description">
          Ce tunnel en osier est parfait pour vos animaux de compagnie.  
          Fabriqué en matériaux naturels, il offre un espace de jeu et de repos agréable.  
          Durable, esthétique et respectueux de l’environnement, c’est un choix idéal pour le confort de vos animaux.
        </p>

        <div class="d-flex gap-3 mt-4">
          <button class="btn btn-success btn-custom">🛒 Ajouter au Panier</button>
          <a href="./produit.php" class="btn btn-outline-secondary btn-custom">⬅ Retour</a>
        </div>
      </div>

    </div>
  </div>
<?php require_once __DIR__ . "/../inc/bas.inc.php" ?>
