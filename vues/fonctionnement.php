<?php
$titre = "Épicerie biologique";
$nav = "fonctionnement";
require "vues/inc/navbar.inc.php";
?>
<div class="banner d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 text-center banner-desc">
                <h1 class="display-1">Bienvenue chez vous!</h1>
                <h1 class="display-5">La seul épicerie biologique <br>en ligne<br> sans but lucratif</h1>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<div class="container-fluid foodwrap"></div>

<div class="wrapper">
      <div class="carousel">
        <div class="cardd cards-1"><h1 class="carddLetter">B</h1></div>
        <div class="cardd cards-2"><h1 class="carddLetter">I</h1></div>
        <div class="cardd cards-3"><h1 class="carddLetter">O</h1></div>
        <div class="cardd cards-4"><h1 class="carddLetter">L</h1></div>
        <div class="cardd cards-5"><h1 class="carddLetter">O</h1></div>
        <div class="cardd cards-6"><h1 class="carddLetter">G</h1></div>
        <div class="cardd cards-7"><h1 class="carddLetter">I</h1></div>
        <div class="cardd cards-8"><h1 class="carddLetter">Q</h1></div>
        <div class="cardd cards-9"><h1 class="carddLetter">U</h1></div>
        <div class="cardd cards-10"><h1 class="carddLetter">E</h1></div>
      </div>
    </div>
<div id="undercarousel"></div>

<div class="py-5 couleurDropDown">
    <div class="container">
        <div class="row pt-5 d-flex flex-row desc justify-content-center align-items-center">
            <div class="col-lg-4 d-flex justify-content-center align-items-center imageConteneur">
                <img src="images/champs.gif" alt="" style="height: 285px;" class="img-responsive imageRonde">
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Employés et bénévoles</div>
                    <div class="card-body">
                        <h5 class="card-title">Au service des gens et de la planète</h5>
                        <p>Depuis le tout début, lors de notre ouverture, bon nombre d'individus se joignent à l'équipe avec une mission commune qui est de faire la différence. D'une part, en mettant l'épaule à la roue du développement durable et d'autre part, en ralliant les gens à cette cause qui requiert un mouvement de masse pour se réaliser. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>

        
        <div class="row pt-5 d-flex flex-row justify-content-center align-items-center ">
            <div class="col-lg-2"></div>
            <div class="col-lg-6 d-flex p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Qualité des produits</div>
                    <div class="card-body">
                        <h5 class="card-title">Du champ à votre assiette </h5>
                        <p class="card-text">Soucieux de la marchandise que nous vendons, une attention particulière leur est portée, de l'ensemencement à la mise en marché. Nous offrons aux gens des produits répondant aux standards de qualité les plus élevés. Ils sont synonyme d'alimentation saine et d'écoresponsabilité. La quiétude dans l'assiette des gens soucieux.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex imageConteneur justify-content-center align-items-center">
                <img src="images/tomateCueillie.gif" alt="" style="height: 285px;" class="img-responsive imageRonde ">
            </div>
        </div>

        
            <div class="row pt-5 d-flex flex-row desc justify-content-center align-items-center">
                <div class="col-lg-4 d-flex justify-content-center align-items-center imageConteneur">
                    <img src="images/poulesLibre.gif" alt="bio" style="height: 285px;" class="img-responsive imageRonde">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                    <div class="card mb-3 textAnim">
                        <div class="card-header">Viandes et respect</div>
                        <div class="card-body">
                            <h5 class="card-title">Des journées au soleil</h5>
                            <p class="card-text">Tous nos animaux sont libres de circuler dans des espaces vastes et adéquats. Quand la température le permet, ils errent dans les paturages en profitant du soleil. Le temps venu, ils sont nourris avec des grains de qualité supérieure, leur assurant les nutriments et les menant vers une croissance saine et naturelle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            
            
        
    </div>
</div>
<div class="container-fluid foodwrap"></div>

<?php
require "vues/inc/footer.inc.php";
?>