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





