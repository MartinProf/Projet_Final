<?php
$titre = "Épicerie biologique";
$nav = "decouvrir";
require "vues/inc/navbar.inc.php";

if (isset($_SESSION['achat'])) {
    echo '<script>', 'alerteAchat();', '</script>';
    unset($_SESSION['achat']);
};
?>
<section class="banner d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-center banner-desc">
                <h1 class="display-1">Bienvenue chez vous!</h1>
                <h1 class="display-5">La seul épicerie biologique <br>en ligne<br> sans but lucratif</h1>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<div class="container-fluid foodwrap"></div>

<section class="py-5 couleurDropDown">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/Champs_bio.jpeg" class="img-fluid rounded-3" alt="">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <h1>Pourquoi nous existons?</h1>
                <p>Nous sommes guidé par notre raison d’être, qui est de favoriser la transition de notre société vers des écosystèmes en santé et durables à travers l’alimentation biologique et éthique. Nous nous y prenons en rendant accessibles des produits biologiques non périssables d’excellente qualité tout en créant un impact positif sur la Terre et sur ses habitants!</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 couleurDropDown">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h1>Comment sommes nous né?</h1>
                <p>Adam, Valérie et Mylène, trois amis et colocataires, trouvaient que leur épicerie biologique leur coûtait trop cher, en plus de générer beaucoup d’emballages. Ils ont donc eu l’idée géniale de s’approvisionner directement chez les producteurs et fournisseurs de leurs produits favoris.

                    « Mais que faire avec toute cette chaudière de beurre de peanuts? Et ces poches pleines de riz, de spaghettis et de haricots? Et cette caisse de chocolat? » se demanda Adam lorsque sa première commande a été livrée. « On partage avec notre communauté! » lui répondirent Valérie et Mylène! Voilà comment les trois amis ont cofondé le groupe d’achat NousRire.

                    En mai 2015, cette idée fut semée dans un Québec fertile ayant soif d’alternatives saines, justes et écoresponsables.

                    Infinis mercis et gratitude à tous nos participants·e·s et bénévoles!
                </p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <img src="images/plantePousse.gif" class="img-fluid rounded-3 w-100" alt="pousse">
            </div>
        </div>
    </div>
</section>

<div class="container-fluid foodwrap"></div>

<div class="banner2 d-flex justify-content-center align-items-center pt-5">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 text-center banner2-desc">
                <h1 class="display-1">Chez vous, c'est...</h1>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>

<div class="container-fluid foodwrap"></div>

<div class="py-5 couleurDropDown">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-5">

            <a href="<?php if ($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin') echo '?action=boutique#fruits';
                        else echo '?action=authentifier'; ?>" class="d-flex justify-content-center align-items-center m-3 bg-body rounded-3" id="imageFondFruit">
                <div class="d-flex align-items-center justify-content-center imageFond font-weight-bold h-100 w-100">Nos fruits</div>
            </a>

            <a href="<?php if ($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin') echo '?action=boutique#legumes';
                        else echo '?action=authentifier'; ?>" class="d-flex justify-content-center align-items-center m-3 bg-body rounded-3" id="imageFondLegume">
                <div class=" d-flex align-items-center justify-content-center imageFond font-weight-bold h-100 w-100">Nos légumes</div>
            </a>

            <a href="<?php if ($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin') echo '?action=boutique#viandes';
                        else echo '?action=authentifier'; ?>" class="justify-content-center align-items-center m-3 bg-body rounded-3" id="imageFondViande">
                <div class="d-flex align-items-center justify-content-center imageFond font-weight-bold h-100 w-100">Nos viandes</div>
            </a>

            <a href="<?php if ($_SESSION['role'] === 'user' || $_SESSION['role'] === 'admin') echo '?action=boutique#diversProd';
                        else echo '?action=authentifier'; ?>" class="d-flex justify-content-center align-items-center m-3 bg-body rounded-3" id="imageFondAutre">
                <div class="d-flex align-items-center justify-content-center imageFond font-weight-bold h-100 w-100">Autres</div>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid foodwrap"></div>
<?php
require "vues/inc/footer.inc.php";
?>