<?php
  require_once("head.php");
  ?>


<section class="fruit_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Notre Catalogue</h2>
    </div>
  </div>
  <div class="container-fluid">
    <div class="fruit_container">
      <?php
      $fruits = [
        ["nom" => "Orange", "image" => "images/f-1.jpg"],
        ["nom" => "Myrtille", "image" => "images/f-2.jpg"],
        ["nom" => "Banane", "image" => "images/f-3.jpg"],
        ["nom" => "Pomme", "image" => "images/f-4.jpg"],
        ["nom" => "Mangue", "image" => "images/f-5.jpg"],
        ["nom" => "Fraise", "image" => "images/f-6.jpg"]
      ];

      foreach ($fruits as $fruit): ?>
        <div class="box">
          <img src="<?= $fruit['image'] ?>" alt="<?= $fruit['nom'] ?>">
          <div class="link_box">
            <h5><?= $fruit['nom'] ?></h5>
            <a href="categorie.php?cat=<?= urlencode($fruit['nom']) ?>">Acheter Maintenant</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
