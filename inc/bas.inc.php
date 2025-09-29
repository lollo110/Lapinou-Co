 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
  body {
    background-image: url(../img/bglapinou&co.png);
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .footer-top {
    padding: 40px 0;
    text-align: center;
  }

  .footer-bottom {
    background-color: #6d584f;
    color: #fff;
    padding: 40px 20px;
    font-size: 15px;
  }

  .footer-bottom a {
    color: #fff;
    text-decoration: none;
  }

  .footer-bottom a:hover {
    text-decoration: underline;
  }

  .social-icons a {
    margin: 0 8px;
    color: #fff;
    font-size: 22px;
    transition: color 0.3s;
  }

  .social-icons a:hover {
    color: #E0B580;
  }

  /* Responsive */
  @media (max-width: 900px) {
    .footer-bottom {
      text-align: center;
      padding: 30px 15px;
    }

    .footer-bottom .row {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .footer-bottom .col-md-4 {
      width: 100%;
      margin-bottom: 25px;
      text-align: center;
    }
  }

  @media (max-width: 500px) {
    .footer-bottom {
      font-size: 14px;
      padding: 25px 10px;
    }

    .social-icons a {
      font-size: 20px;
      margin: 0 6px;
    }

    .footer-bottom h5,
    .footer-bottom h6 {
      font-size: 16px;
    }
  }
</style>

<main class="vh-100">
</main>

<footer>
  <div class="footer-bottom">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Colonne 1 -->
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold">Lapinou & Co</h5>
          <p>Boutique exclusivement en ligne</p>
          <p>89 Rue de l’abbé pierre - 75011 Paris, France</p>
          <p>+33 (0)9 82 41 94 18</p>
          <p>contact@lapinou&co.gmail</p>
          <p class="mt-3">© 2025 Lapinou & Co</p>
        </div>

        <!-- Colonne 2 -->
        <div class="col-md-4 mb-3 text-center">
          <h4>Suivez-nous sur les réseaux sociaux</h4>
          <div class="social-icons mt-2">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- Colonne 3 -->
        <div class="col-md-4 mb-3 text-center">
          <h3>Liens utiles</h3>
          <ul class="list-unstyled text-md">
            <li><a href="#">Infos pratiques</a></li>
            <li><a href="#">Conditions générales de vente</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Mentions légales</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  const toggle = document.getElementById('menu-toggle');
  const links = document.getElementById('menu-links');

  toggle.addEventListener('click', () => {
    links.classList.toggle('active');
  });
</script>

</body>

</html>