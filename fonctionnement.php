<?php
$titre = "Notre fonctionnement";
$nav = "fonctionnement";
include_once "vues/inc/entete.inc.php";
include_once "vues/inc/navbar.inc.php";
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

<div class="wrapper">
      <div class="carousel">
        <input type="checkbox" name="" id="dot">
        <label for="dot" class="dot1"></label>
        <label for="dot" class="dot2"></label>
        <div class="cardd cards-1"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-2"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-3"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-4"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-5"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-6"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-7"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-8"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-9"><img src="images/bacon.png" alt="" class="carddImg"></div>
        <div class="cardd cards-10"><img src="images/bacon.png" alt="" class="carddImg"></div>
      </div>
    </div>





<section class="py-5" id="couleurDropDown">
    <div class="container">
        <div class="row pt-5 d-flex flex-row desc">
            <div class="col-4 d-flex justify-content-center align-items-center imageConteneur">
                <img src="images/champs.gif" alt="" style="height: 285px;" class="img-responsive imageRonde">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Des employés et bénévoles fiers et investis</div>
                    <div class="card-body">
                        <h5 class="card-title">Information sur la boutique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row pt-5 d-flex flex-row desc">
            <div class="col-2"></div>
            <div class="col-6 d-flex justify-content-center align-items-center p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Boutique</div>
                    <div class="card-body">
                        <h5 class="card-title">Information sur la boutique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center imageConteneur">
                <img src="images/tomateCueillie.gif" alt="" style="height: 285px;" class="img-responsive imageRonde ">
            </div>
        </div>

        
            <div class="row pt-5 d-flex flex-row desc">
                <div class="col-4 d-flex justify-content-center align-items-center imageConteneur">
                    <img src="images/poulesLibre.gif" alt="bio" style="height: 285px;" class="img-responsive imageRonde">
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center p-5">
                    <div class="card mb-3 textAnim">
                        <div class="card-header">Boutique</div>
                        <div class="card-body">
                            <h5 class="card-title">Information sur la boutique</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            
            
        
    </div>
</section>

<div class="container-fluid foodwrap"></div>


<?php
include_once "vues/inc/footer.inc.php";
include_once "vues/inc/piedPage.inc.php";
?>