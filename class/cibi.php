<?php

require_once __DIR__ . "/prodotti.php";


class Cibi extends Prodotti{

  public $peso;


  public function __construct($_name, $_caratteristica, $_peso, $_animale, $_prezzo){

    parent::__construct($_name,$_caratteristica, $_prezzo, $_animale);
    $this->peso = $_peso;
    
  }

}

?>