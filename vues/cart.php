<?php
include_once("modeles/DAO/articlesepicerieDAO.class.php");
include_once("modeles/articlesepicerie.class.php");
include_once("vues/inc/navbar.inc.php");
$tableauArticles = articlesepicerieDAO::chercherTous();
$tableauPanier[] = new articlesepicerie;

for ($i = 0; $i < count($tableauArticles); $i++) {
	$quantite = $_COOKIE[$tableauArticles[$i]->getId()];
	array_push($tableauPanier, new articlesepicerie($tableauArticles[$i]->getId(), $tableauArticles[$i]->getArticle(), $tableauArticles[$i]->getPrix(), $quantite, $tableauArticles[$i]->getImage_location()));
}
?>
<div class="container-fluid pt-5">

	<div class="pt-5">

		<div class="pl-5">
			<a id="btnEmpty" href="index.php?action=empty"><img src="images/icon-empty-cart.png" alt="Empty-cart" class="imgCartEmpty pt-5"></a>
		</div>
		<?php
		if (count($tableauPanier) > 0) {
			$total_quantity = $tableauPanier[$i]->getIdArticle();
			$total_price = ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle());
			echo '<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Nom</th>
						<th style="text-align:left;">ID</th>
						<th style="text-align:right;" width="5%">Quantité</th>
						<th style="text-align:right;" width="10%">Prix u</th>
						<th style="text-align:right;" width="10%">Price</th>
						<th style="text-align:center;" width="5%">Remove</th>
					</tr>';
					
					for ($i = 0; $i < count($tableauPanier); $i++) {
						$item_price = $tableauPanier[$i]->getIdArticle() * $tableauPanier[$i]->getPrix();

						if ($tableauPanier[$i]->getIdArticle() > 0) {
							echo '<tr>
								<td><img src="'.$tableauPanier[$i]->getImage_location().'" class="cart-item-image" style="height:75px" />'.$tableauPanier[$i]->getArticle().'</td>
								<td>'.$tableauPanier[$i]->getId().'</td>
								<td style="text-align:right;">
									<button class="btn-minus" onclick="decreaseItem('.$tableauPanier[$i]->getId().')">-</button>
									<input type="text" id="'.$tableauPanier[$i]->getId().'" value="'.$tableauPanier[$i]->getIdArticle().'" name="'.$tableauPanier[$i]->getId().'">
									<button class="btn-plus" onclick="increaseItem('.$tableauPanier[$i]->getId().')">+</button>
								</td>
								<td style="text-align:right;">'."$ " . $tableauPanier[$i]->getPrix().'</td>
								<td style="text-align:right;">'."$ " . number_format($item_price, 2).'</td>
								<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $tableauPanier[$i]->getId(); ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
							</tr>';

						};
						$total_quantity += $tableauPanier[$i]->getIdArticle();
						$total_price += ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle());
					}
					
					echo '
					<tr>
						<td colspan="2" align="right">Total:</td>
						<td align="right"><?php echo $total_quantity; ?></td>
						<td align="right" colspan="2"><strong>'."$ ". number_format($total_price, 2).'</strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>';
		} else echo '<div class="no-records">Your Cart is Empty</div>';

		?>
	</div>
</div>

<script>

function increaseItem(param){
    let noOfItem = document.getElementById(param);
    noOfItem.value = parseInt(noOfItem.value) + 1;
    document.cookie=param + "="+noOfItem.value;
}

function decreaseItem(param){
    let noOfItem = document.getElementById(param);
    if (noOfItem.value <= 0) {
        noOfItem.value = 0;
        alert('La donnée ne peut être négative');
    }else{
        noOfItem.value = parseInt(noOfItem.value) - 1;
    }
    document.cookie=param + "=" + noOfItem.value;
}

</script>