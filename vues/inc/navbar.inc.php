<nav class="mv-navbar navbar navbar-expand-sm position-fixed w-100 fw-bold">
    <div class="container-fluid">
        <a href="?action=decouvrir" target="_self"><img src="images/logo.png" alt="BioLogo" class="mx-3"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header couleurDropDown">
                <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Boutique</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body couleurDropDown">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item <?php if ($nav === 'decouvrir') : ?>decouvrir<?php endif; ?>">
                        <a class="nav-link pe-2" aria-current="page" href="?action=decouvrir">Nous découvrir</a></li>
                    <li class="nav-item <?php if ($nav === 'fonctionnement') : ?>fonctionnement<?php endif; ?>">
                        <a class="nav-link pe-2" href="?action=fonctionnement">Notre fonctionnement</a>
                    </li>
                    <li class="nav-item dropdown <?php echo (($nav === 'boutique') ? "boutique" : "couleurDropDown"); ?>">
                        <a class="nav-link pe-2 dropdown-toggle couleurDropDown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                        <ul class="dropdown-menu dropdown-menu-end couleurDropDown">
                            <li><a class="dropdown-item" href="<?php echo (($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin') ? "?action=boutique" : "?action=authentifier"); ?>">Magasiner</a></li>
                            <li><a class="dropdown-item" href="https://www.google.com/maps/place/Coll%C3%A8ge+de+Rosemont/@45.5572595,-73.584483,17z/data=!3m2!4b1!5s0x4cc91eacc6eada2d:0x671302f39d629607!4m5!3m4!1s0x4cc91eace22b9bcf:0x18799aed17aa23d9!8m2!3d45.5572558!4d-73.5822943">Points de cueillette</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php 
                                if($_SESSION['role'] === 'user'){
                                    echo '  <li><a class="dropdown-item" href="?action=deconnexion">Se déconnecter</a></li>';
                                }elseif($_SESSION['role'] === 'admin'){
                                    echo '  <li><a class="dropdown-item" href="?action=admin">Administration</a></li>';
                                    echo '  <li><a class="dropdown-item" href="?action=deconnexion">Se déconnecter</a></li>';
                                }else
                                    echo '  <li><a class="dropdown-item" href="?action=authentifier">S\'authentifier</a></li>
                                            <li><a class="dropdown-item" href="?action=enregistrer">S\'enregistrer</a></li>'; 
                            ?>                           
                        </ul>
                    </li>
                    <?php if($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin')
                        echo '<li class="nav-item"><a class="nav-link pe-2" href="?action=cart" aria-current="page"><img src="images/cart-plus.png" alt="Cart" height="40"></a></li>';?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="underNav"></div>
</nav>