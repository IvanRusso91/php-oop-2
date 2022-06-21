<?php

require_once __DIR__ . "/clienti.php";

class Registrati extends Clienti{

  public $sconto = 0.20;
  private $email;
  

  public function __construct($_name, $_surname, $_iscritto, $_n_card, $_scadenza_Y, $_scadenza_m , $_email){

    parent::__construct($_name, $_surname, $_iscritto, $_n_card, $_scadenza_Y, $_scadenza_m);

    $this->setEmail($_email);  
    
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