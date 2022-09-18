<?php

class epicerie{

    private $id;
    private $article;
    private $prix;
    private $idArticle;
    private $image_location;

    public function __construct($id, $article, $prix, $idArticle, $image_location)
    {
        $this->id = $id;
        $this->article = $article;
        $this->prix = $prix;
        $this->idArticle = $idArticle;
        $this->image_location = $image_location;
    }

    public function setPrix($prix){ $this->prix = $prix; }
    public function setArticle($article){ $this->article = $article; }
    public function setId($id){ $this->id = $id; }
    public function setidArticle($idArticle){ $this->idArticle = $idArticle; }
    public function setImage_Location($image_location){ $this->image_location = $image_location; }

    public function getPrix(){ return $this->prix; }
    public function getArticle(){ return $this->article; }
    public function getId(){ return $this->id; }
    public function getIdArticle(){ return $this->idArticle; }
    public function getImage_location(){ return $this->image_location; }


    public function __toString()
    {
        return "Id: ".$this->id." Article: ".$this->article. " Prix: ".$this->prix. " idArticle: ".$this->idArticle;
    }

}
