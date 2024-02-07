<?php
  class Blog{
    private $id;
    private $title;
    private $description;
    private $image;
    private $createdAt;

    function __construct($title, $description, $image=""){
      $this->setTitle($title);
      $this->setDescription($description);
      $this->setImage($image);
    }

    public function getId(){return $this->id;}
    public function getTitle(){return $this->title;}
    public function getDescription(){return $this->description;}
    public function getImage(){return $this->image;}

    public function setId($p){$this->id=$p;}
    public function setTitle($p){$this->title=$p;}
    public function setDescription($p){$this->description=$p;}
    public function setImage($p){$this->image=$p;}

    public function toString(){
      return $this->getId(). "  " .
      $this->gettitle()."  ".
      $this->getDescription()."  ".
      $this->getImage();
    }

  }
?>