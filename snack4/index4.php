<?php
$array = array();
for($i = 0; $i < 15; $i++){
   $controllo = true;
   while($controllo){
      $numero = rand(0,100);
      if(!in_array($numero, $array)){
         $controllo = false;
      }
   }
}
