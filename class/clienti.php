<?php

class Clienti {
  
  private $name;
  private $surname;
  private $iscritto= true;


  public function __construct($_name, $_surname, $_iscritto){
    
    $this->name = $_name;
    $this->surname = $_surname;  
    $this->iscritto = $_iscritto;
  }

  public function setName($_name){
    $this->name = $_name;

  }
  
  public function setSurname($_surname){
    $this->surname = $_surname;
  }

  public function setIscritto($_iscritto){
  $this->iscritto = $_iscritto;
  }

  // getting..

  public function getName(){
    return $this->name;
  } 

  public function getSurname(){
    return $this->surname;
  }

  public function getIscritto(){
    return $this->Iscritto;
  }

}



?>