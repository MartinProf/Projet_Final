<?php

class utilisateur {

    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $pseudo;
    private $courriel;
    private $password;
    private $admin;

    public function __construct()
    {
        $arguments = func_get_args();
        $nombreArguments = func_num_args();

        if (method_exists($this, $function = 'construct'.$nombreArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function construct3($courriel, $password, $admin)
    {
        $this->courriel = $courriel;
        $this->password = $password;
        $this->admin = $admin;
    }

    public function construct6($nom, $prenom, $pseudo, $courriel, $password, $admin)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->pseudo=$pseudo;
        $this->courriel=$courriel;
        $this->password=$password;
        $this->admin=$admin;
    }

    public function construct7($idUtilisateur, $nom, $prenom, $pseudo, $courriel, $password, $admin)
    {
        $this->idUtilisateur=$idUtilisateur;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->pseudo=$pseudo;
        $this->courriel=$courriel;
        $this->password=$password;
        $this->admin=$admin;
    }

    public function setIdUtilisateur($valeur){$this->idUtilisateur=$valeur;}
    public function setNom($valeur){$this->nom=$valeur;}
    public function setPrenom($valeur){$this->prenom=$valeur;}
    public function setPseudo($valeur){$this->pseudo=$valeur;}
    public function setCourriel($valeur){$this->courriel=$valeur;}
    public function setPasswword($valeur){$this->password=$valeur;}
    public function setAdmin($valeur){$this->admin=$valeur;}

    public function getIdUtilisateur(){return $this->idUtilisateur;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getPseudo(){return $this->pseudo;}
    public function getCourriel(){return $this->courriel;}
    public function getPassword(){return $this->password;}
    public function getAdmin(){return $this->admin;}

    public function __toString()
    {
        return "IdUtilisateur : ". $this->idUtilisateur . " Courriel : ". $this->courriel . " Password : ". $this->password . " Admin : ". $this->admin;
    }
}

?>