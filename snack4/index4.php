<?php
$arrayNumber = array();
for($i = 0; $i <= 15; $i++){
    echo $i . '<br>';
    
   $controllo = true;
   while($controllo){
    $numero = rand(0,100);
      if(!in_array($numero, $arrayNumber)){
         $controllo = false;
      }
   }
}

echo $numero;
echo $controllo;