<?php
$titre = "Page d'administration";
require "vues/inc/entete.inc.php";
require "vues/inc/navbar.inc.php";
include_once("modeles/DAO/articlesepicerieDAO.class.php");
include_once("modeles/articlesepicerie.class.php");
?>


<section class="containerAdmin container-fluid">
    <div class="row d-flex flex-row">
        <div class="col-12">
            <form action="" class="firstRowAdmin" id="formAdmin" runat="server"><input type="text" name="articleAjouter" placeholder="Article"><input type="text" name="prixAjouter" placeholder="Prix"><input type="text" name="idArticleAjouter" placeholder="ID Article"><input type="file" accept="image/*" id="imgInput" name="imageLocationAjouter" placeholder="Image location">
                <input type="submit" value="Ajouter" name="btnAjouter" class="btnAjouter"></input>
            </form>
        </div>
        <div class="col-12">
            <form action="" id="formAdmin"><input type="text" name="idSupprimer" placeholder="ID"><input type="text" name="articleSupprimer" placeholder="Article"><input type="text" name="prixSupprimer" placeholder="Prix"><input type="text" name="idArticleSupprimer" placeholder="ID Article"><input type="file" id="imgInput" name="imageLocationSupprimer" placeholder="Image location">
                <input type="submit" value="Supprimer" name="btnSupprimer" class="btnSupprimer"></input>
            </form>
        </div>
        <div class="col-12">
            <form action="" id="formAdmin"><input type="text" name="idModifier" placeholder="ID"><input type="text" name="articleModifier" placeholder="Article"><input type="text" name="prixModifier" placeholder="Prix"><input type="text" name="idArticleModifier" placeholder="ID Article"><input type="file" id="imgInput" name="imageLocationModifier" placeholder="Image location">
                <input type="submit" value="Modifier" name="btnModifier" class="btnModifier"></input>
            </form>
        </div>
    </div>
</section>

<section class="row">
    <div id="tabWrap">
        <div id="tabDebut">
            <?php
            $tabArticles = articlesepicerieDAO::chercherTous();
            echo  '<table>
                        <tr>
                            <th>ID</th>
                            <th>Article</th>
                            <th>Prix</th>
                            <th>ID Catégorie</th>
                            <th>Image location</th>                    
                        </tr>';


            for ($i = 0; $i < count($tabArticles); $i++) {
                echo "<tr><td>" . $tabArticles[$i]->getId() . "</td><td>" . $tabArticles[$i]->getArticle() . "</td><td>" . $tabArticles[$i]->getPrix() . "</td><td>" . $tabArticles[$i]->getIdArticle() . "</td><td>" . $tabArticles[$i]->getImage_location() . "</td>";
            }

            echo '</table>';
            ?>
        </div>
        <div id="previewAdmin">
            <h3 style="text-align: center;">Prévisualiser</h3>
            <div class="product-item">
                <div class="product-img">
                    <img id="previewImg" src="#" alt="previewImg" />
                </div>
                <div class="product-description">
                    <h4 class="product-name"><a href="#">Pommes</a></h4>
                    <p id="prixpommes">$0.99</p>
                    <div class="buttons">
                        <button class="btn-minus" onclick="decreaseItem('pommes' , 'prixpommes')">-</button>
                        <input type="text" value="0" />
                        <button class="btn-plus" onclick="increaseItem('pommes' , 'prixpommes')">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require "vues/inc/footer.inc.php";
require "vues/inc/piedPage.inc.php";
?>