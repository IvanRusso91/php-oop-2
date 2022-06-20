<?php

require_once __DIR__ . '/class/prodotti.php';
require_once __DIR__ . '/class/cibi.php';
require_once __DIR__ . '/class/cucce.php';
require_once __DIR__ . '/class/clienti.php';
require_once __DIR__ . '/class/registrati.php';


$prodotti=[];

$cibo_gatti= new Cibi('purina','umido','85gr','gatto', '0.80 euro');
$prodotti[]=$cibo_gatti;

$cibo_cani= new Cibi('royal','secco','1kg','cane', '9.5 euro');
$prodotti[]=$cibo_cani;

$cuccia_cane= new Cucce('Delux','plastica','cane', '50 euro', '1.2 mq', 'esterno');
$prodotti[]=$cuccia_cane;

$cuccia_gatti= new Cucce('small','stoffa','gatto', '15 euro', '60cm', 'interno');
$prodotti[]=$cuccia_gatti;
  



$utente_selezionato = 0;
$clienti=[];

$client_1= new Clienti('Mario', 'Fresco',false, '123456789', '2023/08');
$clienti[]=$cliente_1;

$client_2= new Clienti('Paola', 'Paoli',false, '123456789', '2024/05');
$clienti[]=$cliente_2;

$client_3= new Registrati('Marta', 'Quarzani', 'marta@gmail.com', true, '123456789', '2022/12');
$clienti[]=$cliente_3;

$client_4= new Registrati('Luca', 'Furbo','luca45@hotmail.it', true, '123456789', '2025/11');
$clienti[]=$client_4;




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>ZooShops</h1>
<ul>
  <?php foreach($clienti as $cliente):?>
    <li>
      <p><?php echo $clienti->surname .' '. $cliente->name ?></p>

    </li>
    <h3>prodotto</h3>
    <li>
      <?php foreach($prodotti as $prodotto):?>
      <p><?php echo $prodotto->prezzo .' '. $prodotto->name ?></p>
    </li>
    <li>
      <p><?php echo $prodotto->peso .' '. $prodotto->dimensioni ?></p>
    </li>
    <?php endforeach;?>
</ul>
<?php endforeach; ?>  
</body>
</html>