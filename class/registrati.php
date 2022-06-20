<?php

require_once __DIR__ . "/clienti.php";

class Registrati extends clienti{

  public $sconto = 0.20;
  private $email;
  private $iscritto;

  public function __construct($_name, $_surname, $_email, $_iscritto){

    parent::__construct($_name, $_surname);
    $this->setEmail($_email);
    $this->setIscritto($_iscritto);
    
    
  }

  // Setting..

  public function setIscritto($_iscritto){
    $this->inscritto = $_iscritto;
  }

  public function setEmail($_email){
    $this->email = $_email;
  }

  // getting..

  public function getIscritto(){
    return $this->iscritto;
  }

  public function getEmail(){
    return $this->email;
  }

}


?>