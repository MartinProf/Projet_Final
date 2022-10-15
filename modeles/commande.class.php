<?php

class commande {

    private $idCommande;
    private $courriel;
    private $commande;

    public function __construct()
    {
        $arguments = func_get_args();
        $nombreArguments = func_num_args();

        if (method_exists($this, $function = 'construct'.$nombreArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function construct3($idCommande, $courriel, $commande)
    {
        $this->courriel = $idCommande;
        $this->password = $courriel;
        $this->admin = $commande;
    }

    public function construct2($courriel, $commande)
    {
        $this->password = $courriel;
        $this->admin = $commande;
    }

    public function setIdCommande($valeur){$this->idCommande=$valeur;}
    public function setCourriel($valeur){$this->courriel=$valeur;}
    public function setCommande($valeur){$this->commande=$valeur;}

    public function getIdCommande(){return $this->idCommande;}
    public function getCourriel(){return $this->courriel;}
    public function getCommande(){return $this->commande;}

    public function __toString()
    {
        return "Id: ". $this->idCommande . " Courriel : ". $this->courriel . " Commande : ". $this->commande;
    }
}

?>