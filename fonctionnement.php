<?php
$titre = "Notre fonctionnement";
$nav = "fonctionnement";
require "vues/inc/entete.inc.php";
require "vues/inc/navbar.inc.php";
?>

<section class="banner d-flex justify-content-center align-items-center">
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
</section>
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




<section class="py-5" id="couleurDropDown">
    <div class="container">
        <div class="row pt-5 d-flex flex-row desc justify-content-center align-items-center">
            <div class="col-lg-4 d-flex justify-content-center align-items-center imageConteneur">
                <img src="images/champs.gif" alt="" style="height: 285px;" class="img-responsive imageRonde">
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Employés et bénévoles</div>
                    <div class="card-body">
                        <h5 class="card-title">Information sur la boutique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row pt-5 d-flex flex-row desc justify-content-center align-items-center ">
            <div class="col-lg-2"></div>
            <div class="col-lg-6 d-flex p-5">
                <div class="card mb-3 textAnim">
                    <div class="card-header">Boutique</div>
                    <div class="card-body">
                        <h5 class="card-title">Information sur la boutique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
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
                        <div class="card-header">Boutique</div>
                        <div class="card-body">
                            <h5 class="card-title">Information sur la boutique</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis eius cupiditate quisquam impedit consequatur nihil velit eum illum soluta, corrupti facilis numquam nisi deleniti rem dolorum saepe neque non quas quos! Aut incidunt nesciunt ad, quos delectus ipsam dolores labore doloribus, doloremque soluta laudantium aliquam magni ut veritatis ipsa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            
            
        
    </div>
</section>

<div class="container-fluid foodwrap"></div>


<?php
require "vues/inc/footer.inc.php";
require "vues/inc/piedPage.inc.php";
?>