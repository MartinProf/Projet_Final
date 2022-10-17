<?php
include_once("modeles/DAO/articlesepicerieDAO.class.php");
include_once("modeles/articlesepicerie.class.php");
include_once("modeles/DAO/commandeDAO.class.php");
include_once("modeles/commande.class.php");
include_once("vues/inc/navbar.inc.php");

$tableauArticles = articlesepicerieDAO::chercherTous();
$tableauPanier[] = new articlesepicerie;

for ($i = 0; $i < count($tableauArticles); $i++) {
	$quantite = $_COOKIE[$tableauArticles[$i]->getId()];
	array_push($tableauPanier, new articlesepicerie($tableauArticles[$i]->getId(), $tableauArticles[$i]->getArticle(), $tableauArticles[$i]->getPrix(), $quantite, $tableauArticles[$i]->getImage_location()));
}
?>
<div class="container pt-5">

	<div class="pt-5 row">
		<div class="d-flex justify-content-end">
			<a id="btnEmpty" href="?action=cart" onclick="viderPanier()" class="pt-5" style="color: rgb(152, 122, 61);"><img src="images/icon-empty-cart.png" alt="Empty-cart" class="imgCartEmpty">&nbspVider le panier</a>
		</div>
		<div class="pt-3"></div>
		<?php
		if (count($tableauPanier) > 0) {
			$total_quantity = $tableauPanier[$i]->getIdArticle();
			$total_price = ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle());
			echo '<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Produit</th>
						
						<th style="text-align:right;width=5%" >Quantité</th>
						<th style="text-align:right;" width="20%">Prix unitaire</th>
						<th style="text-align:right;" width="10%">Prix total</th>
						<th style="text-align:center;" width="5%">Retirer</th>
					</tr>';

			for ($i = 0; $i < count($tableauPanier); $i++) {
				$item_price = $tableauPanier[$i]->getIdArticle() * $tableauPanier[$i]->getPrix();

				if ($tableauPanier[$i]->getIdArticle() > 0) {
					echo '<tr>
								<td><img src="' . $tableauPanier[$i]->getImage_location() . '" class="cart-item-image" style="height:75px" />' . $tableauPanier[$i]->getArticle() . '</td>
								
								<td style="text-align:right;">
									<button class="btn-minus" onclick="decreaseItem(' . $tableauPanier[$i]->getId() . ')">-</button>
									<input class"viderLePanier" type="text" id="' . $tableauPanier[$i]->getId() . '" value="' . $tableauPanier[$i]->getIdArticle() . '" name="' . $tableauPanier[$i]->getId() . '">
									<button class="btn-plus" onclick="increaseItem(' . $tableauPanier[$i]->getId() . ')">+</button>
								</td>
								<td style="text-align:right;">' . "$ " . $tableauPanier[$i]->getPrix() . '</td>
								<td style="text-align:right;">' . "$ " . number_format($item_price, 2) . '</td>
								<td style="text-align:center;"><a href="?action=cart" onclick="retirerArticle(' . $tableauPanier[$i]->getId() . ')" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
							</tr>';
				};
				$total_quantity += $tableauPanier[$i]->getIdArticle();
				$total_price += ($tableauPanier[$i]->getPrix() * $tableauPanier[$i]->getIdArticle());
			}

			echo '
					<tr>
						<td align="right">Total:</td>
						<td align="right">' . $total_quantity . '</td>
						<td align="right" colspan="2"><strong>' . "$ " . number_format($total_price, 2) . '</strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>';
		} else echo '<div class="no-records">Votre panier est vide</div>';

		?>
		<div class="d-flex justify-content-end align-items-center">
			<a id="btnCommander" class="<?php echo $_SESSION['courriel'] ?>" href="?action=caisse" style="color: rgb(152, 122, 61);"><img src="images/icon-create-order.png" alt="Create-order" class="imgCreateOrder">&nbspCréer la commande</a>
		</div>
	</div>
</div>

<script>
	function increaseItem(param) {
		let noItem = document.getElementById(param);
		noItem.value = parseInt(noItem.value) + 1;
		document.cookie = param + "=" + noItem.value;
		window.location.reload(true)
	}

	function decreaseItem(param) {
		let noItem = document.getElementById(param);
		if (noItem.value <= 0) {
			noItem.value = 0;
			negatealert();
		} else {
			noItem.value = parseInt(noItem.value) - 1;
		}
		document.cookie = param + "=" + noItem.value;
		window.location.reload(true)
	}

	function retirerArticle(param) {
		let noItem = document.getElementById(param);
		noItem.value = 0;
		document.cookie = param + "=" + noItem.value;
		
	}

	function viderPanier() {
		let classAvider = document.getElementsByTagName('input');
		for (let i = 0; i < classAvider.length; i++) {
			classAvider[i].value = 0;
			document.cookie = classAvider[i].id + "=" + 0;
		}
	}

</script>