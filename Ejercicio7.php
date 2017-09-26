<?php
//Funcion que valide si el caracter introducido es numero y muestre en pantalla.

function validar($num){
  if(is_numeric($num)) {
    echo "El caracter introducido es número";
  }
  else{
    echo "El caracter introducido no es número";
  }
  var_dump($num);

}

echo validar(a);


 ?>
