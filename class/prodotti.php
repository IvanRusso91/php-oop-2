
<?php

class Prodotti{

  public $name;
  public $caratteristica;
  public $prezzo;
  public $destinatario;
  
  public function __construct($_name, $_caratteristica, $_prezzo, $_destinazione){
    
    $this->name = $_name;
    $this->caratteristica = $_caratteristica;
    $this->prezzo = $_prezzo;
    $this->destinazione = $_destinazione;

  }

}

?>