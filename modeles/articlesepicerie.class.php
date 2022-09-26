<?php

class articlesepicerie{

    private $id;
    private $article;
    private $prix;
    private $idArticle;
    private $image_location;

    public function __construct()
    {
        $arguments = func_get_args();
        $nombreArguments = func_num_args();

        if (method_exists($this, $function = 'construct'.$nombreArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function construct4($article, $prix, $idArticle, $image_location)
    {
        $this->article = $article;
        $this->prix = $prix;
        $this->idArticle = $idArticle;
        $this->image_location = $image_location;
    }
    
    public function construct5($id, $article, $prix, $idArticle, $image_location)
    {
        $this->id = $id;
        $this->article = $article;
        $this->prix = $prix;
        $this->idArticle = $idArticle;
        $this->image_location = $image_location;
    }

    public function setPrix($valeur){ $this->prix = $valeur; }
    public function setArticle($valeur){ $this->article = $valeur; }
    public function setId($valeur){ $this->id = $valeur; }
    public function setidArticle($valeur){ $this->idArticle = $valeur; }
    public function setImage_Location($valeur){ $this->image_location = $valeur; }
    
    public function getId(){ return $this->id; }
    public function getArticle(){ return $this->article; }
    public function getPrix(){ return $this->prix; }   
    public function getIdArticle(){ return $this->idArticle; }
    public function getImage_location(){ return $this->image_location; }


    public function __toString()
    {
        return "Id: ".$this->id." Article: ".$this->article. " Prix: ".$this->prix. " idArticle: ".$this->idArticle." chemin:" . $this->image_location;
    }

}
?>