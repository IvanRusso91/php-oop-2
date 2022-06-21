<?php 

require_once __DIR__ . "/cliente.php";


  class Card extends Prodotti{

    private $number;
    private $scadenza_Y;
    private $scadenza_m;
    private $cvv;


    public function __construct($_number,$_scadenza_Y, $_scadenza_m, $_cvv){

      $this->number = $this->checkValidNumber($_number);
      $this->cvv = $this->checkValidCvv($_cvv);
      $this->checkValidExpiredDate($_scadenza_Y, $_scadenza_m);
      $this->scadenza_Y = $_scadenza_Y;
      $this->scadenza_m = $_scadenza_m;
  
    }

    private function checkValidNumber($number){
      
      if(!preg_match("/^[0-9]+$/", $number) || strlen($number) != 16 ){
        throw new Exception('Numero carta di credito non valido');
      }
      
      return $number;
    }

    private function checkValidCvv($cvv){
      
      if(!preg_match("/^[0-9]+$/", $cvv) || strlen($cvv) != 3 ){
        throw new Exception('Numero CVV non valido');
      }
      
      return $cvv;
    }

    private function checkValidExpiredDate($_scadenza_Y, $_scadenza_m){

      $today_y = date("Y");
      $today_m = date("n");
  
      $valid_date = true;
  
      if($today_y > $_scadenza_Y)
      {
        $valid_date = false;
      }
  
      if($today_y == $_scadenza_Y){
  
        if($today_m > $_scadenza_m){
          $valid_date = false;
        }
      }
  
      if(!$valid_date ){
        throw new Exception('Carta di credito scaduta');
      }
  
    }

  }


?>