<?php
$titre = "Épicerie biologique";
$nav = "boutique";
require "vues/inc/navbar.inc.php";
?>

<!---Fruit-->
<div class="container-fluid foodwrap" style="height:90px;"></div>
<div class="container-fluid w-100" id="fruits"></div>
<div class="container-fluid foodwrap"></div>

<div class="container-fluid d-inline-flex justify-content-center flex-wrap py-5">
<?php
    include_once("modeles/articlesepicerie.class.php");
    include_once("modeles/DAO/articlesepicerieDAO.class.php");
    $tableauArticles = articlesepicerieDAO::chercherTous();

  for ($i=0; $i < count($tableauArticles); $i++) { 
    if ($tableauArticles[$i]->getIdArticle() == 1) {
      echo '
      <div class="product-item">
        <div class="product-img">
          <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
          <p id="prix'.$tableauArticles[$i]->getId().'">' . $tableauArticles[$i]->getPrix() . '</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">-</button>
            <input type="text" id="article'.$tableauArticles[$i]->getId().'" value="0">
            <button class="btn-plus" onclick="increaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">+</button>
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

<div class="container-fluid d-inline-flex justify-content-center flex-wrap py-5">
  <?php

    for ($i=0; $i < count($tableauArticles); $i++) { 
      if ($tableauArticles[$i]->getIdArticle() == 2) {
        echo '
        <div class="product-item">
          <div class="product-img">
            <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
            <p id="prix'.$tableauArticles[$i]->getId().'">' . $tableauArticles[$i]->getPrix() . '</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">-</button>
              <input type="text" id="article'.$tableauArticles[$i]->getId().'" value="0">
              <button class="btn-plus" onclick="increaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">+</button>
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

<div class="container-fluid d-inline-flex justify-content-center flex-wrap py-5">
  <?php
    for ($i=0; $i < count($tableauArticles); $i++) { 
      if ($tableauArticles[$i]->getIdArticle() == 3) {
        echo '
        <div class="product-item">
          <div class="product-img">
            <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
            <p id="prix'.$tableauArticles[$i]->getId().'">' . $tableauArticles[$i]->getPrix() . '</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">-</button>
              <input type="text" id="article'.$tableauArticles[$i]->getId().'" value="0">
              <button class="btn-plus" onclick="increaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">+</button>
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

<div class="container-fluid d-inline-flex justify-content-center flex-wrap py-5">
  <?php
    for ($i=0; $i < count($tableauArticles); $i++) { 
      if ($tableauArticles[$i]->getIdArticle() == 4) {
        echo '
          <div class="product-item">
            <div class="product-img">
              <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
            </div>
            <div class="product-description">
              <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
              <p id="prix'.$tableauArticles[$i]->getId().'">' . $tableauArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">-</button>
                <input type="text" id="article'.$tableauArticles[$i]->getId().'" value="0">
                <button class="btn-plus" onclick="increaseItem(\'article'.$tableauArticles[$i]->getId().'\' , \'prix'.$tableauArticles[$i]->getId().'\')">+</button>
              </div>
            </div>
          </div>';
      }
    }
  ?>
</div>
<?php
require "vues/inc/footer.inc.php";
?>