<?php
  $nav = "boutique";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../boutique.css" />
  <link rel="stylesheet" href="../css/bootstrap.css">

  <title>Boutique biologique</title>

</head>
<body>

  <header>
    <nav class="mv-navbar navbar navbar-expand-sm position-fixed w-100 fw-bold">
      <div class="container-fluid">
        <img src="../images/logo.png" alt="BioLogo" height="30px" class="mx-3">
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
              <li><a href="#"><i class="fas fa-cart-arrow-down"></i></a></li>
              <li class="nav-item dropdown" id="couleurDropDown">
                <a class="nav-link pe-2 dropdown-toggle" id="couleurDropDown" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                <ul class="dropdown-menu dropdown-menu-end" id="couleurDropDown">
                  <li><a class="dropdown-item" href="boutique.php">Magasiner</a></li>
                  <li><a class="dropdown-item" href="https://www.google.com/maps/place/Coll%C3%A8ge+de+Rosemont/@45.5572595,-73.584483,17z/data=!3m2!4b1!5s0x4cc91eacc6eada2d:0x671302f39d629607!4m5!3m4!1s0x4cc91eace22b9bcf:0x18799aed17aa23d9!8m2!3d45.5572558!4d-73.5822943">Points de cueillette</a></li>
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

    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="fruits"></div>
    <div class="container-fluid foodwrap"></div>

    <div class="container-fluid d-inline-flex justify-content-center products">

      <div class="product-item">
        <div class="product-img">
          <img src="../images/pommes.png" alt="pommes" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Pommes</a></h4>
          <p id="prixpommes">$0.99</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('pommes' , 'prixpommes')">-</button>
            <input type="text" id="pommes" value="0" />
            <button class="btn-plus" onclick="increaseItem('pommes' , 'prixpommes')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/fraises .png" alt="fraises" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Fraises</a></h4>
          <p id="prixfraises">$4.79</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('fraises' , 'prixfraises')">-</button>
            <input type="text" id="fraises" value="0" />
            <button class="btn-plus" onclick="increaseItem('fraises' , 'prixfraises')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/framboises.png" alt="framboises" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Framboises</a></h4>
          <p id="prixframboises">$4.99</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('framboises' , 'prixframboises')">-</button>
            <input type="text" id="framboises" value="0" />
            <button class="btn-plus" onclick="increaseItem('framboises' , 'prixframboises')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/raisins.png" alt="raisins" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Raisins</a></h4>
          <p id="prixraisins">$5.49</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('raisins' , 'prixraisins')">-</button>
            <input type="text" id="raisins" value="0" />
            <button class="btn-plus" onclick="increaseItem('raisins' , 'prixraisins')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/poires.png" alt="poires" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Poires</a></h4>
          <p id="prixpoires">$1.69</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('poires' , 'prixpoires')">-</button>
            <input type="text" id="poires" value="0" />
            <button class="btn-plus" onclick="increaseItem('poires' , 'prixpoires')">+</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="legumes"></div>
    <div class="container-fluid foodwrap"></div>


    <div class="container-fluid d-inline-flex justify-content-center products">
      <div class="product-item">
        <div class="product-img">
          <img src="../images/carottes.png" alt="carottes" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Carottes</a></h4>
          <p id="prixcarottes">$2.79</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('carottes' , 'prixcarottes')">-</button>
            <input type="text" id="carottes" value="0" />
            <button class="btn-plus" onclick="increaseItem('carottes' , 'prixcarottes')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/concombres.png" alt="concombres" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Concombres</a></h4>
          <p id="prixconcombres">$1.39</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('concombres' , 'prixconcombres')">-</button>
            <input type="text" id="concombres" value="0" />
            <button class="btn-plus" onclick="increaseItem('concombres' , 'prixconcombres')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/pommesdeterre.png" alt="pommesdeterre" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Pommes de terre</a></h4>
          <p id="prixpommesdeterre">$5.59</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('pommesdeterre' , 'prixpommesdeterre')">-</button>
            <input type="text" id="pommesdeterre" value="0" />
            <button class="btn-plus" onclick="increaseItem('pommesdeterre' , 'prixpommesdeterre')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/radis.png" alt="radis" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Radis</a></h4>
          <p id="prixradis">$1.99</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('radis' , 'prixradis')">-</button>
            <input type="text" id="radis" value="0" />
            <button class="btn-plus" onclick="increaseItem('radis' , 'prixradis')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/poivrons.png" alt="poivrons" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Poivrons</a></h4>
          <p id="prixpoivrons">$3.69</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('poivrons' , 'prixpoivrons')">-</button>
            <input type="text" id="poivrons" value="0" />
            <button class="btn-plus" onclick="increaseItem('poivrons' , 'prixpoivrons')">+</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="viandes"></div>
    <div class="container-fluid foodwrap"></div>

    <div class="container-fluid d-inline-flex justify-content-center products">

      <div class="product-item">
        <div class="product-img">
          <img src="../images/pommes.png" alt="pommes" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Pommes</a></h4>
          <p id="prixpommes">$0.99</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('pommes' , 'prixpommes')">-</button>
            <input type="text" id="pommes" value="0" />
            <button class="btn-plus" onclick="increaseItem('pommes' , 'prixpommes')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/fraises .png" alt="fraises" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Fraises</a></h4>
          <p id="prixfraises">$4.79</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('fraises' , 'prixfraises')">-</button>
            <input type="text" id="fraises" value="0" />
            <button class="btn-plus" onclick="increaseItem('fraises' , 'prixfraises')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/framboises.png" alt="framboises" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Framboises</a></h4>
          <p id="prixframboises">$4.99</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('framboises' , 'prixframboises')">-</button>
            <input type="text" id="framboises" value="0" />
            <button class="btn-plus" onclick="increaseItem('framboises' , 'prixframboises')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/raisins.png" alt="raisins" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Raisins</a></h4>
          <p id="prixraisins">$5.49</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('raisins' , 'prixraisins')">-</button>
            <input type="text" id="raisins" value="0" />
            <button class="btn-plus" onclick="increaseItem('raisins' , 'prixraisins')">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="../images/poires.png" alt="poires" />
        </div>
        <div class="product-description">
          <h4 class="product-name"><a href="#">Poires</a></h4>
          <p id="prixpoires">$1.69</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem('poires' , 'prixpoires')">-</button>
            <input type="text" id="poires" value="0" />
            <button class="btn-plus" onclick="increaseItem('poires' , 'prixpoires')">+</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid foodwrap"></div>
    <div class="container-fluid w-100" id="diversProd"></div>
    <div class="container-fluid foodwrap"></div>

    <section id="divers">

      <div class="container-fluid d-inline-flex justify-content-center products">

        <div class="product-item">
          <div class="product-img">
            <img src="../images/pommes.png" alt="pommes" />
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">Pommes</a></h4>
            <p id="prixpommes">$0.99</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem('pommes' , 'prixpommes')">-</button>
              <input type="text" id="pommes" value="0" />
              <button class="btn-plus" onclick="increaseItem('pommes' , 'prixpommes')">+</button>
            </div>
          </div>
        </div>
  
        <div class="product-item">
          <div class="product-img">
            <img src="../images/fraises .png" alt="fraises" />
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">Fraises</a></h4>
            <p id="prixfraises">$4.79</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem('fraises' , 'prixfraises')">-</button>
              <input type="text" id="fraises" value="0" />
              <button class="btn-plus" onclick="increaseItem('fraises' , 'prixfraises')">+</button>
            </div>
          </div>
        </div>
  
        <div class="product-item">
          <div class="product-img">
            <img src="../images/framboises.png" alt="framboises" />
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">Framboises</a></h4>
            <p id="prixframboises">$4.99</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem('framboises' , 'prixframboises')">-</button>
              <input type="text" id="framboises" value="0" />
              <button class="btn-plus" onclick="increaseItem('framboises' , 'prixframboises')">+</button>
            </div>
          </div>
        </div>
  
        <div class="product-item">
          <div class="product-img">
            <img src="../images/raisins.png" alt="raisins" />
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">Raisins</a></h4>
            <p id="prixraisins">$5.49</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem('raisins' , 'prixraisins')">-</button>
              <input type="text" id="raisins" value="0" />
              <button class="btn-plus" onclick="increaseItem('raisins' , 'prixraisins')">+</button>
            </div>
          </div>
        </div>
  
        <div class="product-item">
          <div class="product-img">
            <img src="../images/poires.png" alt="poires" />
          </div>
          <div class="product-description">
            <h4 class="product-name"><a href="#">Poires</a></h4>
            <p id="prixpoires">$1.69</p>
            <div class="buttons">
              <button class="btn-minus" onclick="decreaseItem('poires' , 'prixpoires')">-</button>
              <input type="text" id="poires" value="0" />
              <button class="btn-plus" onclick="increaseItem('poires' , 'prixpoires')">+</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="fixed-bottom">
    <div class="amount-details flex-lg-row flex-wrap">
      <h3>Number of Items: <span id="numOfItem">0</span></h3>
      <h3>Total price: $ <span id="userTotalAmount">0</span></h3>
      <button type="submit" class="btnSubmit">Valider</button>
    </div>
  </footer>

  <script src="../jquery/jquery-3.5.0.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../css/fontawesome-free-6.2.0-web/js/all.js"></script>
  <script src="../boutique.js"></script>

</body>
</html>