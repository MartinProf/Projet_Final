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

function actionPanier($option) {

    switch($option) {
        case "add":
            if(!empty($_POST["quantity"])) {
                selectParId($_GET["id"]);
                $itemArray = array($productByCode[0]["id"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
                
                if(!empty($_SESSION["cart_item"])) {
                    if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                        foreach($_SESSION["cart_item"] as $k => $v) {
                                if($productByCode[0]["code"] == $k) {
                                    if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                        $_SESSION["cart_item"][$k]["quantity"] = 0;
                                    }
                                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
    }




}