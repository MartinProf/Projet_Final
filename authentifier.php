<?php 
    include_once "vues/inc/entete.inc.php";
?>

<div style="max-width:600px; display: block; margin-left: auto; margin-right: auto ">
    <!--Authentification-->
    <div class="container p-5 my-5 border bg-secondary bg-opacity-25">
        <?php 
            session_start();
            $quantite = $_SESSION['essaie'];
            if($quantite!=3)
            echo '<div class="alert alert-danger" role="alert">Les identifiants entrés sont inexactes!</div>';
            echo 'Courriel: root@root.com  Password: root';
        ?>
      <h1>Authentification</h1>
      <div class=".container">
        <div class="row">
          <div class="btn-group">
              <button type="button active" class="btn btn-secondary col-6" autofocus>Se connecter</button>
              <button type="button" class="btn btn-secondary col-6">S'inscrire</button>
          </div>
        </div>
        </div>
        <form action="redirection.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre courriel" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd" required>
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
<?php 
    include_once "vues/inc/piedPage.inc.php";
?>