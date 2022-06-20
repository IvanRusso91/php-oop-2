<?php

class Clienti {
  
  public $name;
  public $surname;
  private $n_card;
  private $scadenza;
  private $iscritto;


  public function __construct($_name, $_surname, $_iscritto, $_n_card, $_scadenza ){
    
    $this->name = $_name;
    $this->surname = $_surname;  
    $this->iscritto = $_iscritto;
    $this->setCard($_n_card);
    $this->setScadenza($_scadenza);
  }

  public function setIscritto($_iscritto){
    $this->inscritto = $_iscritto;
  }

  public function setCard($_n_card){
    $this->n_card = $_n_card;
  }

  public function setScadenza($_scadenza){
    $this->scadenza = $_scadenza;
  }

  // getting..

  
  public function getIscritto(){
    return $this->iscritto;
  }

  public function getCard(){
    return $this->n_card;
  }

  public function getScadenza(){
    return $this->scadenza;
  }

}



?>