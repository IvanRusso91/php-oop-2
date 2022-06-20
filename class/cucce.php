<?php

require_once __DIR__ . "/prodotti.php";


class Cucce extends Prodotti{

  public $dimensioni;
  public $locazione;

  public function __construct($_name, 
                              $_caratteristica, 
                              $_destinazione, 
                              $_prezzo,
                              $_dimensioni,
                              $_locazione){

    parent::__construct($_name,$_caratteristica, $_prezzo, $_destinazione);
    $this->dimensioni = $_dimensioni;
    $this->locazione = $_locazione;
      
  }

}

?>