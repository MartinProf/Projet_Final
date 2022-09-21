<nav class="mv-navbar navbar navbar-expand-sm position-fixed w-100 fw-bold">
    <div class="container-fluid">
        <a href="http://localhost/Projet_Final/" target="_self"><img src="images/logo.png" alt="BioLogo" height="70px" class="mx-3"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header" id="couleurDropDown">
                <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Boutique</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="couleurDropDown">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item " id="<?php if($nav === 'decouvrir'): ?>decouvrir<?php endif; ?>">
                        <a class="nav-link pe-2" aria-current="page" href="decouvrir.php">Nous découvrir</a></li> 
                    <li class="nav-item" id="<?php if($nav === 'fonctionnement'): ?>fonctionnement<?php endif; ?>">
                        <a class="nav-link pe-2" href="fonctionnement.php">Notre fonctionnement</a></li>
                        <li class="nav-item ps-4 my-auto align-middle"><a href="#"><i class="fas fa-cart-arrow-down cart"></i></a></li>
                    <li class="nav-item dropdown" id="<?php echo (($nav === 'boutique') ? "boutique" : "couleurDropDown"); ?>">
                        <a class="nav-link pe-2 dropdown-toggle" id="couleurDropDown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                    <ul class="dropdown-menu dropdown-menu-end" id="couleurDropDown">
                        <li><a class="dropdown-item" href="boutique.php">Magasiner</a></li>
                        <li><a class="dropdown-item" href="https://www.google.com/maps/place/Coll%C3%A8ge+de+Rosemont/@45.5572595,-73.584483,17z/data=!3m2!4b1!5s0x4cc91eacc6eada2d:0x671302f39d629607!4m5!3m4!1s0x4cc91eace22b9bcf:0x18799aed17aa23d9!8m2!3d45.5572558!4d-73.5822943">Points de cueillette</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="authentifier.php">S'authentifier</a></li>
                        <li><a class="dropdown-item" href="enregistrer.php">S'enregistrer</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid" id="underNav"></div>
