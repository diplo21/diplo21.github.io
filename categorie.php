
<?php
// Démarrer la session pour les interactions utilisateur
session_start();

// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplo_shop";

// Connexion à la base de données avec gestion d'erreur
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

// Filtrer la catégorie reçue depuis l'URL pour éviter les attaques XSS
$cat_nom = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : '';

// Vérifier que la catégorie n'est pas vide
if (empty($cat_nom)) {
  echo "Aucune catégorie sélectionnée.";
  exit;
}

// Requête préparée pour récupérer l'ID de la catégorie
$sql_cat = "SELECT id_categorie FROM categorie WHERE name = ?";
$stmt = $conn->prepare($sql_cat);
$stmt->bind_param("s", $cat_nom);
$stmt->execute();
$result = $stmt->get_result();

// Vérifier si la catégorie existe
if ($result->num_rows === 0) {
  echo "Catégorie introuvable.";
  exit;
}

// Extraire l'ID de la catégorie
$row = $result->fetch_assoc();
$id_categorie = $row['id_categorie'];

// Récupérer les produits liés à cette catégorie
$sql_produits = "SELECT * FROM produits WHERE id_categorie = ?";
$stmt = $conn->prepare($sql_produits);
$stmt->bind_param("i", $id_categorie);
$stmt->execute();
$produits = $stmt->get_result();
?>

<?php require_once("head.php"); ?>

  <!-- Affichage des produits -->
  <section class="fruit_section layout_padding">
    <div class="container">
      <h2 class="custom_heading">Nos <?php echo ucfirst($cat_nom); ?>s</h2>
      <div class="row">
        <?php while ($prod = $produits->fetch_assoc()): ?>
          <div class="col-md-4">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo htmlspecialchars($prod['image']); ?>" alt="<?php echo htmlspecialchars($prod['nom']); ?>" class="img-fluid" />
              </div>
              <div class="detail-box">
                <h5><?php echo htmlspecialchars($prod['nom']); ?></h5>
                <p><?php echo $prod['description'] ? htmlspecialchars($prod['description']) : 'Pas de description.'; ?></p>
                <div class="options">
                  <h6><?php echo number_format($prod['prix'], 2); ?> €</h6>
                  <a href="ajouter_panier.php?id=<?php echo (int)$prod['id_produit']; ?>">
                    <i class="fas fa-cart-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <!-- Scripts JS -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
