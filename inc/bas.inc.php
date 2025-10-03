
<style>

 .footer-bottom {
  background-color: #6d584f;
  color: #fff;
  padding: 50px 20px 20px; 
  font-size: 15px;
  position: relative;
}

.footer-bottom .container {
  max-width: 1200px;
  margin: auto;
}

.footer-bottom .row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 40px;
}

.footer-bottom .col {
  flex: 1 1 300px;
  font-family: "Sriracha", cursive;
}


.footer-bottom h5,
.footer-bottom h6 {
    font-family: "Sriracha", cursive;
  font-size: 30px;
  margin-bottom: 15px;
  text-align: center; 
  position: relative;
}

.footer-bottom h5::after,
.footer-bottom h6::after {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: #E0B580;
  margin: 6px auto 0;
  border-radius: 2px;
}


.footer-bottom ul {

  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-bottom ul li {
  margin-bottom: 14px;
}

.footer-bottom ul li a {
  font-family:  "Sriracha", cursive;
  color: #fff;
  text-decoration: none;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

.footer-bottom ul li a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: -3px;
  left: 0;
  background-color: #E0B580;
  transition: width 0.3s ease;
}

.footer-bottom ul li a:hover {
  color: #E0B580;
}

.footer-bottom ul li a:hover::after {
  width: 100%;
}


.footer-bottom .col:first-child,
.footer-bottom .col:last-child {
  text-align: left;
}


.social-icons {
  text-align: center;
}

.social-icons a {
  margin: 0 10px;
  color: #fff;
  font-size: 22px;
  transition: transform 0.3s, color 0.3s;
}

.social-icons a:hover {
  color: #E0B580;
  transform: scale(1.2);
}


.footer-bottom .copyright {
    font-family: "Sriracha", cursive;
  text-align: center;
  margin-top: 30px;
  font-size: 22px;
  opacity: 0.9;
}

/* Responsive */
@media (max-width: 900px) {
  .footer-bottom .row {
    flex-direction: column;
    align-items: center;
    gap: 30px;
  }

  .footer-bottom .col {
    text-align: center !important;
  }
}

  
</style>



<footer>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        
       
        <div class="col">
          <h5 class="pb-3">Lapinou & Co</h5>
          <p>Boutique exclusivement en ligne</p>
          <p>89 Rue de l’abbé pierre - 75011 Paris, France</p>
          <p>+33 6 82 41 94 18</p>
          <p>contact@lapinouco.fr</p>
        </div>

       
        <div class="col">
          <h6 class="pb-3">Suivez-nous</h6>
          <div class="social-icons mt-2">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div class="col">
          <h6 class="pb-3">Liens utiles</h6>
          <ul>
            <li><a href="<?= BASE_URL ?>vue/contact.php">Contact</a></li>
            <li><a href="<?= BASE_URL ?>vue/qui_sommes_nous.php">Qui Sommes nous</a></li>
            <li><a href="#">Conditions générales de vente</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Mentions légales</a></li>
          </ul>
        </div>
      </div>

     
      <p class="copyright">© 2025 Lapinou & Co</p>
    </div>
  </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const toggle = document.getElementById('menu-toggle');
  const links = document.getElementById('menu-links');

  toggle.addEventListener('click', () => {
    links.classList.toggle('active');
  });
</script>

</body>

</html>