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
			$total_price = ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle())
		?>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Nom</th>
						<th style="text-align:left;">ID</th>
						<th style="text-align:right;" width="5%">Quantité</th>
						<th style="text-align:right;" width="10%">Prix u</th>
						<th style="text-align:right;" width="10%">Price</th>
						<th style="text-align:center;" width="5%">Remove</th>
					</tr>
					<?php
					for ($i = 0; $i < count($tableauPanier); $i++) {
						$item_price = $tableauPanier[$i]->getIdArticle() * $tableauPanier[$i]->getPrix();

						if ($tableauPanier[$i]->getIdArticle() > 0) {
					?>

							<tr>
								<td><img src="<?php echo $tableauPanier[$i]->getImage_location(); ?>" class="cart-item-image" style="height:75px" /><?php echo $tableauPanier[$i]->getArticle(); ?></td>
								<td><?php echo $tableauPanier[$i]->getId(); ?></td>
								<td style="text-align:right;">
									<button class="btn-minus" onclick="decreaseItem('.$tableauPanier[$i]->getId().')">-</button>
									<input type="text" id="'.$tableauPanier[$i]->getId().'" value="<?php echo $tableauPanier[$i]->getIdArticle() ?>" name="'.$tableauPanier[$i]->getId().'">
									<button class="btn-plus" onclick="increaseItem('.$tableauPanier[$i]->getId().')">+</button>
								</td>
								<td style="text-align:right;"><?php echo "$ " . $tableauPanier[$i]->getPrix(); ?></td>
								<td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
								<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $tableauPanier[$i]->getId(); ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
							</tr>
					<?php
						}
						$total_quantity += $tableauPanier[$i]->getIdArticle();
						$total_price += ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle());
					}
					?>

					<tr>
						<td colspan="2" align="right">Total:</td>
						<td align="right"><?php echo $total_quantity; ?></td>
						<td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		<?php
		} else {
		?>
			<div class="no-records">Your Cart is Empty</div>
		<?php
		}
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