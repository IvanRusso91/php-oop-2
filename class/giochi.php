<?php

require_once __DIR__ . "/prodotti.php";


class Giochi extends Prodotti{

  

  public function __construct($_name, 
                              $_caratteristica, 
                              $_destinazione, 
                              $_prezzo,
                              ){

    parent::__construct($_name,$_caratteristica, $_prezzo, $_destinazione);

      
  }

}