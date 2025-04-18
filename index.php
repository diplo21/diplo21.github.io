<?php
session_start();
require_once("db.php");
?>

  <?php
  require_once("head.php");
  ?>

  <!-- Section de la boutique -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <!-- Détails de la boutique -->
        <div class="detail-box">
          <h2> Magasin de fruits </h2>
          <p> Il existe de nombreuses variantes de fruits. </p>
        </div>
        <!-- Image de la boutique -->
        <div class="img-box">
          <img src="images/shop-img.jpg" alt="Image de la boutique de fruits">
        </div>
        <!-- Bouton d'achat -->
        <div class="btn-box">
          <a href="fruit.php"> Acheter maintenant </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de la section boutique -->

  <!-- Section "A propos" -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <!-- Image de présentation de la section A propos -->
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="Image à propos">
          </div>
        </div>
        <!-- Texte de la section A propos -->
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr />
              <h2> À propos de notre magasin de fruits </h2>
            </div>
            <p> "Diplo Shop est votre boutique spécialisée en fruits frais et de qualité. Nous proposons un large choix
              de pommes croquantes, de myrtilles juteuses, de bananes nourrissantes, ainsi que des oranges, mangues et
              fraises gorgées de saveurs. Passez nous voir pour une expérience fruitée exceptionnelle !" </p>
            <a href="about.php"> En savoir plus </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de la section A propos -->

  <br><br>
  <!-- Section des avis clients -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2> Avis </h2>
      </div>
      <!-- Carrousel des avis clients -->
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Avis client : Prince NZENZEKI -->
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/client-img.png" alt="Client satisfait">
              </div>
              <div class="detail-box">
                <h5> Prince NZENZEKI </h5>
                <p>
                  "Je suis vraiment satisfait de ma commande ! Les fruits sont d'une qualité exceptionnelle, frais,
                  juteux et savoureux. La livraison a été rapide et les produits bien emballés pour garantir leur
                  fraîcheur. Je recommande vivement ce site pour tous ceux qui recherchent des fruits délicieux et un
                  service client au top. Merci pour cette belle expérience, je repasserai commande sans hésiter !"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de la section des avis clients -->

  


  <?php
  require_once("footer.php");
  ?>
</body>

</html>
