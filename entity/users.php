<?php
class User
{
  private $id;
  private $name;
  private $gender;
  private $username;
  private $password;

  // function __construct($id, $name, $gender){
  //   $this->setId($id);
  //   $this->setName($name);
  //   $this->setGender($gender);
  // }

  function __construct($id, $name, $gender, $username, $password)
  {
    $this->setId($id);
    $this->setName($name);
    $this->setGender($gender);
    $this->setUsername($username);
    $this->setPassword($password);
  }

  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getGender()
  {
    return $this->gender;
  }
  public function getUsername()
  {
    return $this->username;
  }
  public function getPassword()
  {
    return $this->password;
  }

  public function setId($p)
  {
    $this->id = $p;
  }
  public function setName($p)
  {
    $this->name = $p;
  }
  public function setGender($p)
  {
    $this->gender = $p;
  }
  public function setUsername($p)
  {
    $this->username = $p;
  }
  public function setPassword($p)
  {
    $this->password = $p;
  }

  public function toString()
  {
    return $this->getId() . "  " .
      $this->getName() . "  " .
      $this->getGender();
  }
}
