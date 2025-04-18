<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Diplo Shop" />
  <title> Diplo Shop </title>
  <!-- Feuille de style pour le slider (carrousel d'images) -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- Feuille de style Bootstrap (pour le style de base et le responsive design) -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Police d'écriture -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Styles personnalisés pour ce template -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- Section d'en-tête avec logo -->
    <header class="brand_box">
      <a class="navbar-brand" href="index.php">
        <span> Diplo Shop </span>
      </a>
    </header>
    <!-- Fin de la section d'en-tête -->
  </div>

  <!-- Section de navigation (menu) -->
  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container">
          <!-- Bouton pour mobile -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Contenu du menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <!-- Lien vers l'accueil -->
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <!-- Lien vers la page des fruits -->
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php"> Nos Fruits </a>
                </li>
                <!-- Lien vers la page de contact -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> Contactez-nous </a>
                </li>
                <!-- Connexion ou déconnexion selon l'état de la session -->
                <?php if (isset($_SESSION['user'])): ?>
                  <!-- Si utilisateur connecté -->
                  <li class="nav-item">
                    <a class="nav-link" href="deconnexion.php">
                      <i class="fas fa-sign-out-alt"></i> Se déconnecter
                    </a>
                  </li>
                <?php else: ?>
                  <!-- Sinon afficher bouton connexion -->
                  <li class="nav-item">
                    <a class="nav-link" href="connexion.php">
                      <i class="fas fa-user"></i> Se connecter
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
              <!-- Barre de recherche -->
              <form>
                <input type="search" placeholder="Rechercher" aria-label="Rechercher">
              </form>
              <!-- Bouton panier avec icône -->
              <a href="panier.php" aria-label="Voir le panier" class="nav-link">
                <i class="fas fa-cart-shopping"></i> Panier
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <!-- Fin de la section de navigation -->
</body>
</html>
