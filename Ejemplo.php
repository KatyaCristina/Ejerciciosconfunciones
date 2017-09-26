<?php
function operaciones($n1, $n2, $operacion){
  $res=0;
  if($operacion== "Suma"){
    $res=$n1+$n2;
  }
  elseif ($operacion== "Resta") {
      $res=$n1-$n2;
  }
  elseif ($operacion== "Multiplicacion") {
      $res=$n1*$n2;
  }
  return $res;
}


?>
