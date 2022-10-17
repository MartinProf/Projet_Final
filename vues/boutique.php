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
      $laValeur = $_COOKIE[$i+1];
      echo '
      <div class="product-item"">
        <div class="product-img">
          <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
          <p>' . $tableauArticles[$i]->getPrix() . '</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('.$tableauArticles[$i]->getId().')">-</button>
            <input type="text" id="'.$tableauArticles[$i]->getId().'" value="'. $laValeur .'" name="'.$tableauArticles[$i]->getId().'">
            <button class="btn-plus" onclick="increaseItem('.$tableauArticles[$i]->getId().')">+</button>
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
    $laValeur = $_COOKIE[$i+1];
    echo '
    <div class="product-item"">
      <div class="product-img">
        <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
      </div>
      <div class="product-description">
        <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
        <p>' . $tableauArticles[$i]->getPrix() . '</p>
        <div class="buttons">
          <button class="btn-minus" onclick="decreaseItem('.$tableauArticles[$i]->getId().')">-</button>
          <input type="text" id="'.$tableauArticles[$i]->getId().'" value="'. $laValeur .'" name="'.$tableauArticles[$i]->getId().'">
          <button class="btn-plus" onclick="increaseItem('.$tableauArticles[$i]->getId().')">+</button>
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
      $laValeur = $_COOKIE[$i+1];
      echo '
      <div class="product-item">
        <div class="product-img">
          <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
          <p>' . $tableauArticles[$i]->getPrix() . '</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('.$tableauArticles[$i]->getId().')">-</button>
            <input type="text" id="'.$tableauArticles[$i]->getId().'" value="'. $laValeur .'" name="'.$tableauArticles[$i]->getId().'">
            <button class="btn-plus" onclick="increaseItem('.$tableauArticles[$i]->getId().')">+</button>
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
      $laValeur = $_COOKIE[$i+1];
      echo '
      <div class="product-item">
        <div class="product-img">
          <img src="'.$tableauArticles[$i]->getImage_location().'" alt="'.$tableauArticles[$i]->getArticle().'">
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">'.$tableauArticles[$i]->getArticle().'</a></h4>
          <p>' . $tableauArticles[$i]->getPrix() . '</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('.$tableauArticles[$i]->getId().')">-</button>
            <input type="text" id="'.$tableauArticles[$i]->getId().'" value="'. $laValeur .'" name="'.$tableauArticles[$i]->getId().'">
            <button class="btn-plus" onclick="increaseItem('.$tableauArticles[$i]->getId().')">+</button>
          </div>
        </div>
      </div>';
    }
  }
  ?>
</div>
<script>

function increaseItem(param){
    let noOfItem = document.getElementById(param);
    noOfItem.value = parseInt(noOfItem.value) + 1;
    document.cookie=param + "="+noOfItem.value;
}

function decreaseItem(param){
    let noOfItem = document.getElementById(param);
    if (noOfItem.value <= 0) {
        noOfItem.value = 0;
        negatealert();
    }else{
        noOfItem.value = parseInt(noOfItem.value) - 1;
    }
    document.cookie=param + "=" + noOfItem.value;
    
}

</script>

<?php
require "vues/inc/footer.inc.php";
?>