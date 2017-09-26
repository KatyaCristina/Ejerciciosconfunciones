<?php
//Funcion que muestre si un número es par o impar
function ver($num){
  if ($num %2==0) {
    echo "El número $num es par";
  }
  else{
    echo "El número $num es impar";
  }

}
echo ver(4);

?>
