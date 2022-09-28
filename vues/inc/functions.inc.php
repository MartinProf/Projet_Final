<?php

function afficherArticles($tabArticles)
{

    echo '<table>
    <tr>
        <th>ID</th>
        <th>Article</th>
        <th>Prix</th>
        <th>ID Catégorie</th>
        <th>Image location</th>
    </tr>';


    for ($i = 0; $i < count($tabArticles); $i++) {
        echo "<tr><td>" . $tabArticles[$i]->getId() . "</td>
        <td>" . $tabArticles[$i]->getArticle() . "</td>
        <td>" . $tabArticles[$i]->getPrix() . "</td>
        <td>" . $tabArticles[$i]->getIdArticle() . "</td>
        <td>" . $tabArticles[$i]->getImage_location() . "</td>";
    }

    echo '
</table>';
}
?>

<?php
function afficherArticlesBoutique($tabArticles)
{

    $tabArticles = articlesepicerieDAO::chercherTous();
    if (!empty($tabArticles)) {
        foreach ($tabArticles as $key => $value) {

            for ($i = 0; $i < count($tabArticles); $i++) {
                if ($tabArticles[$i]->getIdArticle() == 4) {
                    ?>
          <div class="product-item">
          <form method="post" action="index.php?action=add&code<?php echo $tabArticles[$key]["code"];?>"></form>
            <div class="product-img">
              <img src="<?php echo $tabArticles[$key]["image_location"];?>" 
            </div>
            <div class="product-description">
              <h4 class="product-name"><?php echo $tabArticles[$key]["Article"]; ?></a></h4>
              <p id="prix' . $tabArticles[$i]->getId() . '">' . $tabArticles[$i]->getPrix() . '</p>
              <div class="buttons">
                <button class="btn-minus" onclick="decreaseItem(\'article' . $tabArticles[$i]->getId() . '\' , \'prix' . $tableauArticles[$i]->getId() . '\')">-</button>
                <input type="text" id="article' . $tabArticles[$i]->getId() . '" value="0">
                <button class="btn-plus" onclick="increaseItem(\'article' . $tabArticles[$i]->getId() . '\' , \'prix' . $tableauArticles[$i]->getId() . '\')">+</button>
              </div>
            </div>
          </div>';
                }
            }
        }
    }
}
?>