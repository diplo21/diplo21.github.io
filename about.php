<?php
	$conn = mysqli_connect("localhost","root","","diplo_shop");
	mysqli_set_charset($conn, "utf8");
?>

<!<?php
session_start();
require_once("db.php");
?>

  <?php
  require_once("head.php");
  ?>


  <!-- Section À propos -->
  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="Image à propos de Diplo Shop">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2> À propos de notre boutique de fruits </h2>
            </div>
            <p>
              "Bienvenue chez Diplo Shop, le paradis des fruits frais et savoureux ! Découvrez nos pommes croquantes, nos myrtilles juteuses, nos bananes nourrissantes, et nos oranges gorgées de vitamines..."
            </p>
            <a href="#"> En savoir plus </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de la section À propos -->

  <?php
  require_once("footer.php");
  ?>


</body>
</html>

