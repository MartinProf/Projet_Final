<?php 
    if(isset($_SESSION['Aerreur'])) echo $_SESSION['Aerreur']. "<br>";
?>
<div style="max-width:600px; display: block; margin-left: auto; margin-right: auto ">
    <!--Authentification-->
    <div class="container p-5 my-5 border bg-secondary bg-opacity-25">
      <h1>Authentification</h1>
      <div class=".container">
        <div class="row">
          <div class="btn-group">
              <button type="button active" class="btn btn-secondary col-6" autofocus>Se connecter</button>
              <button type="button" class="btn btn-secondary col-6">S'inscrire</button>
          </div>
        </div>
        </div>
        <form action="?action=authenVerif" method="POST">
            <div class="mb-3 mt-3">
                <label for="authEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="authEmail" placeholder="Entrez votre courriel" name="authEmail" required>
            </div>
            <div class="mb-3">
                <label for="authPwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="authPwd" placeholder="Entrez votre mot de passe" name="authPwd" required>
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
