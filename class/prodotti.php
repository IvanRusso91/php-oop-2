
<?php

class Prodotti{

  public $name;
  public $caratteristica;
  public $prezzo;
  public $animale;
  
  public function __construct($_name, $_caratteristica, $_prezzo, $_animale){
    
    $this->name = $_name;
    $this->caratteristica = $_caratteristica;
    $this->prezzo = $_prezzo;
    $this->animale = $_animale;

  }

}

?>