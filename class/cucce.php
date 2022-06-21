<?php

require_once __DIR__ . "/prodotti.php";


class Cucce extends Prodotti{

  public $materiale;

  public function __construct($_name, 
                              $_caratteristica, 
                              $_animale, 
                              $_prezzo,
                              $_materiale){

    parent::__construct($_name,$_caratteristica, $_prezzo, $_animale);
    
    $this->materiale = $_materiale;
      
  }

}

?>