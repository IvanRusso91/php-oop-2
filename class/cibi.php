<?php

require_once __DIR__ . "/prodotti.php";


class Cibi extends Prodotti{

  public $peso;


  public function __construct($_name, $_caratteristica, $_peso, $_destinazione, $_prezzo){

    parent::__construct($_name,$_caratteristica, $_prezzo, $_destinazione);
    $this->peso = $_peso;
    
  }

}

?>