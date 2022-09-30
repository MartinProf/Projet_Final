<div style="max-width:600px; display: block; margin-left: auto; margin-right: auto ">
  <!--Inscription-->
    <div class="container p-5 my-5 border bg-secondary bg-opacity-25">
    <?php
      if(isset($_SESSION['erreur'])) echo $_SESSION['erreur'];
      if(isset($_SESSION['leCourriel'])) echo $_SESSION['leCourriel'];
      if(isset($_SESSION['leMotPasse'])) echo $_SESSION['leMotPasse'];
      if(isset($_SESSION['laVerification'])) echo $_SESSION['laVerification'];
      if(isset($_SESSION['utilisateur'])) echo $_SESSION['utilisateur'];
    ?>
      <h1>Inscription</h1>
      <div class="row">
          <div class="btn-group-horizontal">
              <button type="button" class="btn btn-secondary col-5">Se connecter</button>
              <button type="button active" class="btn btn-secondary col-5">S'inscrire</button>
          </div>
      </div>
        <form action="?action=enregisValidation" method="POST">
          <div class="mb-3 mt-3">
            <input type="email" class="form-control" id="email" placeholder="Entrez votre courriel" name="email" required>
            <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd" required>
            <input type="password" class="form-control" id="pwdVerify" placeholder="Confirmez votre mot de passe" name="pwdVerify" required>
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="promotion"> J'accepte de recevoir les offres promotionnelles
            </label>
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="communication"> J'accepte de recevoir des communications
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>     
    </div>
</div>
