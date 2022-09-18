<?php 
    include_once "vues/inc/entete.inc.php";
    include_once "vues/inc/navbar.inc.php";
?>

<section style="position:relative; top: 96px; margin-bottom: 110px";>

	<h1>Fichier de test pour la classe epicerie</h1>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "epiceriebiologique";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		  die("<h3>Connection failed: " . $conn->connect_error . "</h3><br>");
		}
		echo "<h3>Connexion complétée avec la bdd </h3><br>";
		
		
		$sql = "SELECT id, article, prix, idArticle, image_location FROM articlesepicerie";
		$result = $conn->query($sql);
		$tableauArticles = array();

		include_once "modeles/epicerie.class.php";
		
		if ($result->num_rows > 0) {
		  // output data of each row
		  echo "<h4>Lecture des articles dans la bdd</h4><br>";
		  while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Article: " . $row["article"]. "Prix " . $row["prix"]. " idArticle".$row["idArticle"]. " lien: ".$row["image_location"] ."<br>";
			$nouvelleItem = new epicerie($row["id"], $row["article"], $row["prix"], $row["idArticle"], $row["image_location"]);
			array_push( $tableauArticles ,$nouvelleItem );
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();
	?>

	<?php
		echo "<h1>Test du constructeur</h1>";
		var_dump($tableauArticles);

		echo "L'article, du id 5 est le " .$tableauArticles[5]->getArticle();
	?>

	</section>
	

<?php 
    include_once "vues/inc/footer.inc.php";
    include_once "vues/inc/piedPage.inc.php";
?>
