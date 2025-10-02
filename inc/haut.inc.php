<?php
require_once __DIR__ . '/init.inc.php';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lapinou&Co</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/88c7dae6e1.js" crossorigin="anonymous"></script>
</head>

<header>

  <body style="background-image: url(<?= BASE_URL ?>assets/img/background.png);">


    <nav class="top-nav">
      <div class="brand">
        <a href="<?= BASE_URL ?>vue/page_accueil.php"><img src="<?= BASE_URL ?>/assets/img/logo-final-nobackground.gif" alt="Logo Lapinou & Co" class="logo"></a>
        <img src="<?= BASE_URL ?>/assets/img/TITRELAPINOUUU.png" alt="Lapinou & Co" class="titre">
      </div>
    </nav>


    <nav class="menu-nav">
      <div class="menu-toggle" id="menu-toggle">☰</div>
      <div class="menu-links" id="menu-links">
        <a href="<?= BASE_URL ?>model/traitement.php?produit=jouets">Jouets</a>
        <a href="<?= BASE_URL ?>model/traitement.php?produit=accessoires">Accessoires</a>
        <a href="<?= BASE_URL ?>model/traitement.php?produit=nourritures">Nourritures</a>
        <a href="<?= BASE_URL ?>vue/contact.php">Contact</a>
        <a href="<?= BASE_URL ?>vue/qui_sommes_nous.php">Qui sommes-nous ?</a>
        <a href="<?= BASE_URL ?>vue/connexion.php">Connexion</a>
        <a href="<?= BASE_URL ?>vue/inscription.php">Inscription</a>
      </div>
    </nav>


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

      body {
        margin: 0;
        font-family: "Sriracha", cursive;
        cursor: url("<?= BASE_URL ?>assets/img/carrot_pointer.png"), auto;

      }

      body:active {
        cursor: url("<?= BASE_URL ?>assets/img/carrot_cursor_mange_noback.jpeg"), auto;

      }

      a {
        cursor: url("<?= BASE_URL ?>assets/img/carrot_pointer.png"), auto;
      }

    
      a:active {
        cursor: url("<?= BASE_URL ?>assets/img/carrot_cursor_mange_noback.jpeg"), auto;

      }


      .top-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #FDFCFD;
        padding: 15px 20px;
        border-radius: 12px;
        box-shadow: 0px 0px 30px rgba(2, 2, 2, 1);
        margin: 10px auto;
        max-width: 1700px;
        background-image: url("<?= BASE_URL ?>assets/img/pattes.gif");
        background-size: contain;
      }

      .brand {
        display: flex;
        align-items: center;


      }

      .brand .logo {
        height: 130px;
      }

      .brand .titre {
        height: 68px;
      }


      .menu-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #6d584f;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08);
        margin: 0 auto 20px;
        max-width: 1700px;
        padding: 14px 20px;
        position: relative;
      }

      .menu-links {
        display: flex;
        gap: 40px;
        position: relative;
        z-index: 200000;
      }

      .menu-nav a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        position: relative;
        transition: color 0.3s ease;
      }

      .menu-nav a::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 0;
        background-color: #E0B580;
        transition: width 0.3s ease;
      }

      .menu-nav a:hover {
        color: #BC9C71;
      }

      .menu-nav a:hover::after {
        width: 100%;
      }


      .menu-toggle {
        display: none;
        font-size: 28px;
        color: #fff;
        cursor: pointer;
        margin-left: auto;
      }

      /* Responsive */
      @media (max-width: 900px) {
        .brand .logo {
          height: 80px;
        }

        .brand .titre {
          height: 40px;
        }

        .menu-links {
          display: none;
          flex-direction: column;
          gap: 20px;
          background: #6d584f;
          position: absolute;
          top: 100%;
          left: 0;
          right: 0;
          padding: 20px;
          border-radius: 0 0 12px 12px;
        }

        .menu-links.active {
          display: flex;
        }

        .menu-toggle {
          display: block;
        }
      }

      @media (max-width: 500px) {
        .brand .logo {
          height: 60px;
        }

        .brand .titre {
          height: 30px;
        }

        .menu-nav {
          padding: 12px 15px;
        }

        .menu-links {
          font-size: 0.9rem;
        }
      }
    </style>

    </section>
</header>