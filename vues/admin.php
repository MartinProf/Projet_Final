<?php
$titre = "Page d'administration";
$nav = "boutique";
require "vues/inc/navbar.inc.php";
include_once "modeles/DAO/articlesepicerieDAO.class.php";
include_once "modeles/DAO/utilisateurDAO.class.php";
?>

<div class="container py-5">
    <div class="row">
        <h2>Administration et modification d'articles</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="Ajouter-tab" type="button" data-bs-target="#Ajouter"
                role="tab" aria-controls="Ajouter" aria-selected="true">Ajouter un item</button></li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="Modifier-tab" type="button" data-bs-target="#Modifier"
                role="tab" aria-controls="Modifier" aria-selected="true">Modifier un item</button></li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="Supprimer-tab" type="button" data-bs-target="#Supprimer"
                role="tab" aria-controls="Supprimer" aria-selected="true">Supprimer un item</button></li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="Utilisateur-tab" type="button" data-bs-target="#Utilisateur"
                role="tab" aria-controls="Utilisateur" aria-selected="true">Droit d'administration</button></li>
        </ul>

            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show" role="tabpanel" id="Ajouter" aria-labelledby="Ajouter-tab">
                    <h3>Ajouter</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-8">
                            <form action="?action=adminAjouter" method="POST" class="d-flex flex-column" enctype="multipart/form-data" id="formAdmin" runat="server">
                                <input class="jsArticle" type="text" name="articleAjouter" placeholder="Article">
                                <input class="jsPrix" type="text" name="prixAjouter" placeholder="Prix">
                                <input type="text" name="idArticleAjouter" placeholder="ID Article">
                                <input TYPE ="HIDDEN" NAME ="MAX_FILE_SIZE" VALUE ="614400">
                                <input class="jsImage" type="file" accept="image/*" id="imgInput" name="fichier" placeholder="Image location">
                                <button type="button" class="btn btn-info" onclick="previsualiser()">Prévisualiser</button>
                                <input type="submit" value="Ajouter" name="Upload" class="btnAjouter"></input>                                
                            </form>
                            <?php 
                                if(isset($_SESSION['AjoutErreur'])) echo $_SESSION['AjoutErreur']. "<br>";
                            ?>
                            </div>
                            <div class="col-4">
                                <div class="product-item justify-content-center align-item-center">
                                    <div class="product-img">
                                        <img id="previewImg" src="#" alt="previewImg"/>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name"><a id="nomProduit" href="#">Nom Article</a></h4>
                                        <p class="prixAffiche" id="prixpommes">$0.99</p>
                                        <div class="buttons">
                                            <button class="btn-minus">-</button>
                                            <input type="text" value="0" />
                                            <button class="btn-plus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show" role="tabpanel" id="Modifier" aria-labelledby="Modifier-tab">
                    <h3>Modifier</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10">
                            <form action="?action=adminModifier" method="POST" id="formAdmin">
                                <input type="text" name="idModifier" placeholder="ID">
                                <input type="text" name="articleModifier" placeholder="Article">
                                <input type="text" name="prixModifier" placeholder="Prix">
                                <input type="text" name="idArticleModifier" placeholder="ID Article">
                                <input type="submit" value="Modifier" name="btnModifier" class="btnModifier"></input>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show" role="tabpanel" id="Supprimer" aria-labelledby="Supprimer-tab">
                    <h3>Supprimer</h3>
                    <div class="col-8">
                        <form action="?action=adminSupprimer" method="POST" id="formAdmin">
                            <input type="text" name="idSupprimer" placeholder="ID">
                            <input type="submit" value="Supprimer" name="btnSupprimer" class="btnSupprimer"></input>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show" role="tabpanel" id="Utilisateur" aria-labelledby="Utilisateur-tab">
                    <h3>Modification des droits administrateur</h3>
                    <form action="?action=adminPromotion" method="POST" id="formAdmin">
                        <input type="text" name="courrielPromo" placeholder="Courriel à ajouter à la liste des administrateurs">
                        <input type="submit" value="Promotion" name="Promo" class="btnAjouter"></input>
                    </form>
                    <form action="?action=adminPromotion" method="POST" id="formAdmin">
                        <input type="text" name="courrielDevotion" placeholder="Courriel à retirer de la liste des administrateurs">
                        <input type="submit" value="Retirer" name="Devotion" class="btnSupprimer"></input>
                    </form>
                    <form action="?action=adminPromotion" method="POST" id="formAdmin">
                        <input type="text" name="courrielSup" placeholder="Courriel à supprimer des usages">
                        <input type="submit" value="Supprimer" name="Sup" class="btnSupprimer"></input>
                    </form>
                </div>
            </div>
    
  </div>
  </div>
 
<?php
    if(isset($_SESSION['AjoutErreur'])) echo $_SESSION['AjoutErreur']. "<br>";
    if(isset($_SESSION['modifierErreur'])) echo $_SESSION['modifierErreur']. "<br>";
    if(isset($_SESSION['SupprimerErreur'])) echo $_SESSION['SupprimerErreur']. "<br>";
    if(isset($_SESSION['PromoErreur'])) echo $_SESSION['PromoErreur']. "<br>";
?>
<div class="container-fluid foodwrap"></div>

<section class="container">
    <div class="row">
        <div id="tabWrap">
            <div id="tabDebut">
                <?php
                $tabArticles = articlesepicerieDAO::chercherTous();
                echo  '<table>
                            <tr>
                                <th>ID</th>
                                <th>Article</th>
                                <th>Prix</th>
                                <th>ID Article</th>
                                <th>Image location</th>                    
                            </tr>';
                for ($i = 0; $i < count($tabArticles); $i++) {
                    echo "<tr><td>" . $tabArticles[$i]->getId() . "</td><td>" . $tabArticles[$i]->getArticle() . "</td><td>" . $tabArticles[$i]->getPrix() . "</td><td>" . $tabArticles[$i]->getIdArticle() . "</td><td>" . $tabArticles[$i]->getImage_location() . "</td>";
                }
                echo '</table>';
                ?>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid foodwrap"></div>

<script>

    imgInput.onchange = evt =>{
        const [file] = imgInput.files
        if(file) {
            previewImg.src = URL.createObjectURL(file)
        }
    }

    function previsualiser(){
        const jsArticle = document.getElementsByClassName('jsArticle')[0].value;
        const jsPrix = document.getElementsByClassName('jsPrix')[0].value;
        document.getElementById('nomProduit').textContent = jsArticle;
        document.getElementById('prixpommes').innerHTML = jsPrix;
    }
    
</script>

<?php
require "vues/inc/footer.inc.php";
?>