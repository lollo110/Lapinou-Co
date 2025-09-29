<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <title>Produit</title>
</head>

<body>
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
      background: #fff;
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
      color: #007bff;
      margin-bottom: 10px;
    }

    .btn-custom {
      border-radius: 25px;
      padding: 8px 16px;
      font-size: 0.9rem;
     
     
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 5px;
    }
  </style>
  <div class="container">


    <div class="d-flex justify-content-evenly flex-wrap pt-5 pb-5">
      <div class="card" style="width: 18rem;">
        <img src="../assets/img/VIV9343-2-removebg-preview.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tunnel en osier</h5>
          <p class="card-text"></p>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐⭐⭐</p>
          <h3 style="color: black;">21,00€</h3>
        </div>
      </div>
      <div class="card" style="width: 18rem;padding-top: 0.5rem;">
        <img src="../assets/img/Passerelle-7-removebg-preview.png" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title">Passerelle</h5>
          <p class="card-text"></p>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐⭐</p>
          <h3 style="color: black;">14,80€</h3>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../assets/img/Jungle-infernale-removebg-preview.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">La table Canopée</h5>
          <p class="card-text"></p>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐⭐⭐</p>
          <h3 style="color: black;">52,00€</h3>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-evenly flex-wrap pb-5">
      <div class="card" style="width: 18rem;">
        <img src="../assets/img/trio-2-scaled-removebg-preview.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trio de balles</h5>
          <p class="card-text"></p>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐⭐⭐</p>
          <h3 style="color: black;">9,90€</h3>
        </div>
      </div>
      <div class="card" style="width: 18rem; padding-top: 0.5rem;">
        <img src="../assets/img/Bascule-krokmou-1-2-removebg-preview.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bascule Krokmou</h5>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐</p>
          <h3 style="color: black;">36,00€</h3>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../assets/img/Jeu-bac-10-2-removebg-preview.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jeu en bois le « Bac +10 »</h5>
          <p class="card-text"></p>
          <a href="./details.php" class="btn btn-primary">Détails du Produit</a>
          <p class="card-text">⭐⭐⭐⭐</p>
          <h3 style="color: black;">18,90€</h3>
        </div>
      </div>
    </div>
  </div>
</body>

</html>