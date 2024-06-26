<?php
$array = array();
for($i = 0; $i < 15; $x++){
   $controllo = true;
   while($controllo){
      $numero = rand(0,300);
      if(!in_array($numero, $array)){
         $controllo = false;
      }
   }
}
