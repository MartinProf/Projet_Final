<?php
$titre = "Boutique biologique";
$nav = "boutique";
include_once "vues/inc/entete.inc.php";
include_once "vues/inc/navbar.inc.php";
?>


<!---Fruit-->
<div class="container-fluid foodwrap" style="height:90px;"></div>
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
</div>

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
</div>
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
</div>
<!---Autres-->
<div class="container-fluid foodwrap"></div>
<div class="container-fluid w-100" id="diversProd"></div>
<div class="container-fluid foodwrap"></div>

<div class="container-fluid d-inline-flex justify-content-center products">
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
</div>



<?php
include_once "vues/inc/footer.inc.php";
include_once "vues/inc/piedPage.inc.php";
?>