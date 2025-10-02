<?php require_once __DIR__ . "/../inc/haut.inc.php"; ?>

<style>
    h2{
    font-family: "Bangers", system-ui;
    -webkit-text-stroke: 1.5px black;
    text-shadow: 0px 0px 10px black;
    color: white;
    font-size: 4em;
  }
</style>

<body>
  


<div class="container my-5">
  <h2 class="text-center pb-5">Notre Équipe</h2>
  <div class="col-12 col-md-6 d-flex justify-content-center mx-auto
    pb-5">
    <div class="card p-2" style="width:18rem;">
      <img src="<?= BASE_URL ?>assets/img/Lorenzo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Lorenzo Paolo Cilurzo</h4>
        <h5 class="card-title text-center">👨‍🍳 Chef de Projet</h5>
        <p class="card-text text-justify">
          Responsable de la coordination générale, il organise les tâches et veille au bon déroulement du projet.
        </p>
      </div>
    </div>
  </div>
  <div class="row g-4 justify-content-center">
    <!-- Card 1 -->

    <!-- Card 2 -->
    <div class="col-12 col-md-4 d-flex justify-content-center">
      <div class="card p-2" style="width:18rem;">
        <img src="<?= BASE_URL ?>assets/img/Nadia.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Nadia Chefi</h4>
          <h5 class="card-title text-center">🎨 Header/Footer & Responsable du style</h5>
          <p class="card-text">
            Chargée de la conception visuelle, elle s’occupe de l’identité graphique et de l’esthétique du site.
          </p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-md-4 d-flex justify-content-center">
      <div class="card p-2" style="width:18rem;">
        <img src="<?= BASE_URL ?>assets/img/Ilyes.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Ilyes Ayadi</h4>
          <h5 class="card-title text-center">🏠 Page d’accueil & images IA</h5>
          <p class="card-text">
            Il crée la page d’accueil et génère des illustrations grâce à l’intelligence artificielle.
          </p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-12 col-md-4 d-flex justify-content-center">
      <div class="card p-2" style="width:18rem;">
        <img src="<?= BASE_URL ?>assets/img/Rayane.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Rayane Mbarek</h4>
          <h5 class="card-title text-center">🛒 Page produits & recherche d’images</h5>
          <p class="card-text">
            Il développe la page produits et sélectionne les images adaptées pour mettre en valeur les articles.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once __DIR__ . "/../inc/bas.inc.php" ?>