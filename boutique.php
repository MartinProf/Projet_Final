<?php
$titre = "Boutique biologique";
$nav = "boutique";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bio</title>
  <!-- Font Awesome -->

  <!-- Custom CSS -->
  <link rel="stylesheet" href="boutique.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<header>
    <nav class="mv-navbar navbar navbar-expand-sm position-fixed w-100 fw-bold">
      <div class="container-fluid">
        <img src="images/logo.png" alt="BioLogo" height="30px" class="mx-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header" id="couleurDropDown">
            <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Boutique</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" id="couleurDropDown">
            <ul class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active pe-2" aria-current="page" href="decouvrir.php">Nous découvrir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-2" href="fonctionnement.php">Notre fonctionnement</a>
              </li>
              <li><a href="#"><i class="fas fa-cart-arrow-down cart"></i></a></li>
              <li class="nav-item dropdown" id="couleurDropDown">
                <a class="nav-link pe-2 dropdown-toggle" id="couleurDropDown" href="boutique.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                <ul class="dropdown-menu dropdown-menu-end" id="couleurDropDown">
                  <li><a class="dropdown-item" href="boutique.php">Magasiner</a></li>
                  <li><a class="dropdown-item" href="https://www.google.com/maps/place/Coll%C3%A8ge+de+Rosemont/@45.5572595,-73.584483,17z/data=!3m2!4b1!5s0x4cc91eacc6eada2d:0x671302f39d629607!4m5!3m4!1s0x4cc91eace22b9bcf:0x18799aed17aa23d9!8m2!3d45.5572558!4d-73.5822943">Points de cueillette</a></li>
                  <li><a class="dropdown-item" href="#">Administrateur</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="authentifier.php">S'authentifier</a></li>
                  <li><a class="dropdown-item" href="enregistrer.php">S'enregistrer</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!---Fruit-->
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="fruits"></div>
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid d-inline-flex justify-content-center products">
    <?php
    		$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "epiceriebiologique";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT id, article, prix, idArticle, image_location FROM articlesepicerie";
        $result = $conn->query($sql);
        $tableauArticles = array();
    
        include_once "modeles/epicerie.class.php";

        while($row = $result->fetch_assoc()) {
          $nouvelleItem = new epicerie($row["id"], $row["article"], $row["prix"], $row["idArticle"], $row["image_location"]);
          array_push( $tableauArticles ,$nouvelleItem );
        }
        $conn->close();


      for ($i=0; $i < count($tableauArticles); $i++) { 
        if ($tableauArticles[$i]->getIdArticle() == 1) {
          echo '
          <div class="product-item">
            <div class="product-img">
              <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'" />
            </div>
            <div class="product-description">
              <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
              <p id="prix'.$tableauArticles[$i]->getArticle().'">' . $tableauArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">-</button>
                <input type="text" id="'.$tableauArticles[$i]->getArticle().'" value="0" />
                <button class="btn-plus" onclick="increaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">+</button>
              </div>
            </div>
          </div>';
        }
      }
    ?>
    <!---Légumes-->
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="legumes"></div>
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid d-inline-flex justify-content-center products">
    <?php
       for ($i=0; $i < count($tableauArticles); $i++) { 
        if ($tableauArticles[$i]->getIdArticle() == 2) {
          echo '
          <div class="product-item">
            <div class="product-img">
              <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'" />
            </div>
            <div class="product-description">
              <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
              <p id="prix'.$tableauArticles[$i]->getArticle().'">' . $tableauArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">-</button>
                <input type="text" id="'.$tableauArticles[$i]->getArticle().'" value="0" />
                <button class="btn-plus" onclick="increaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">+</button>
              </div>
            </div>
          </div>';
        }
      }
    ?>
    <!---Viandes-->
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="viandes"></div>
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid d-inline-flex justify-content-center products">
    <?php
       for ($i=0; $i < count($tableauArticles); $i++) { 
        if ($tableauArticles[$i]->getIdArticle() == 3) {
          echo '
          <div class="product-item">
            <div class="product-img">
              <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'" />
            </div>
            <div class="product-description">
              <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
              <p id="prix'.$tableauArticles[$i]->getArticle().'">' . $tableauArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">-</button>
                <input type="text" id="'.$tableauArticles[$i]->getArticle().'" value="0" />
                <button class="btn-plus" onclick="increaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">+</button>
              </div>
            </div>
          </div>';
        }
      }
    ?>
    <!---Autres-->
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="diversProd"></div>
    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid d-inline-flex justify-content-center products" style="margin-bottom: 206px;">
      <?php
       for ($i=0; $i < count($tableauArticles); $i++) { 
        if ($tableauArticles[$i]->getIdArticle() == 4) {
          echo '
          <div class="product-item">
            <div class="product-img">
              <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'" />
            </div>
            <div class="product-description">
              <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
              <p id="prix'.$tableauArticles[$i]->getArticle().'">' . $tableauArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">-</button>
                <input type="text" id="'.$tableauArticles[$i]->getArticle().'" value="0" />
                <button class="btn-plus" onclick="increaseItem(\''.$tableauArticles[$i]->getArticle().'\' , \'prix'.$tableauArticles[$i]->getArticle().'\')">+</button>
              </div>
            </div>
          </div>';
        }
      }
    ?>

  </main>

  <footer class="fixed-bottom">
    <div class="amount-details flex-lg-row flex-wrap">
      <h3>Number of Items: <span id="numOfItem">0</span></h3>
      <h3>Total price: $ <span id="userTotalAmount">0</span></h3>
    </div>
  </footer>

  <script src="jquery/jquery-3.5.0.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="css/fontawesome-free-6.2.0-web/js/all.js"></script>
  <script src="boutique.js"></script>

</body>
</html>