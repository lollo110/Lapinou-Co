<?php
require_once './init.inc.php';

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lapinou & Co</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Première nav -->
  <nav class="top-nav">
    <div class="brand">
      <img src="../img/logo-final.gif" alt="Logo Lapinou & Co" class="logo">
      <img src="../img/TITRELAPINOUUU.png" alt="Lapinou & Co" class="titre">
    </div>
  </nav>

  <!-- Deuxième nav -->
  <nav class="menu-nav">
    <div class="menu-toggle" id="menu-toggle">☰</div>
    <div class="menu-links" id="menu-links">
      <a href="#">Jouets</a>
      <a href="#">Accessoires</a>
      <a href="#">Nourriture</a>
      <a href="#">Contact</a>
      <a href="#">Qui sommes-nous ?</a>
    </div>
  </nav>


  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url(../img/bglapinou&co.png);
      background-size: cover;
      background-attachment: fixed;
    }

    /* Première nav */
    .top-nav {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #FDFCFD;
      padding: 15px 20px;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.12);
      margin: 10px auto;
      max-width: 1700px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .brand .logo {
      height: 120px;
    }

    .brand .titre {
      height: 60px;
    }

    /* Deuxième nav */
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
    }

    .menu-nav a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      cursor: pointer;
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

    /* --- Menu burger --- */
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
