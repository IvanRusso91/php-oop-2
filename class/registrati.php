<?php

require_once __DIR__ . "/clienti.php";

class Registrati extends Clienti{

  public $sconto = 0.20;
  private $email;
  

  public function __construct($_name, $_surname, $_email, $_iscritto, $_n_card, $_scadenza){

    parent::__construct($_name, $_surname, $_iscritto, $_n_card, $_scadenza);

    $this->setEmail($_email);
    $this->setIscritto($_iscritto);
    
    
  }

  // Setting..

  

  public function setEmail($_email){
    $this->email = $_email;
  }

  // getting..


  public function getEmail(){
    return $this->email;
  }

}


?>