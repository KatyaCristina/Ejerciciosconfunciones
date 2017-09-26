<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercico 4</title>
  </head>
  <body>
    <p>4. Funcion que muestre las opciones: sumar, restar, multiplicar, dividir, potencia y raiz. Debe mostrar por
      pantalla la operacion seleccionada y el resultado.</p>
    <?php

    function raiz($n1,$n2){
      $raiz1=sqrt($n1);
      $raiz2=sqrt($n2);
      echo "<br>";
      echo "La raiz del número $n1 es: $raiz1 <br>";
      echo "La raiz del número $n2 es: $raiz2 <br>";
    }

    function operacion_realizar($n1,$n2,$operacion){

      if ($operacion=="Suma") {
          $res=$n1+$n2;
        }
        elseif ($operacion=="Resta") {
          $res=$n1-$n2;
        }
        elseif ($operacion=="Multiplicacion") {
          $res=$n1*$n2;
        }
        elseif ($operacion=="Division") {
          $res=$n1/$n2;
        }
        elseif ($operacion=="Potencia") {
          $res=pow($n1,$n2);
          echo "La base es: $n1";
          echo "<br>";
          echo "El exponente es: $n2";
          echo "<br>";

        }
        echo "El resultado es: ";
       return $res;
    }

    $operacion="Raiz";

    if ($operacion=="Raiz") {
      echo "La operación seleccionada es: $operacion <br>";
      echo  "", raiz(8,6,"Raiz");
    }
    else {
      echo "La operación seleccionada es: $operacion <br>";
      echo  "", operacion_realizar(3,2,"Division");
    }
     ?>

  </body>
</html>
