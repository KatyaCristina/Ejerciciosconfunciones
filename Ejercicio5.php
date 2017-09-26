
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    /*Funcion que pida por pantalla una temperatura en grados celsius, muestre un menu para
     convertirlos a farenheit o kelvin y muestre el equivalente por pantalla.

    */

    ?>
    <form method="POST">
      <label for="">Temperatura en celsius</label>
      <input type="text" name="temp" value=""><br>
      <label for="">A convertir en:</label>
      <select name="aconvertir">
        <option value="Seleccione">Seleccione</option>
        <option value="Farenheit">Farenheit</option>
        <option value="Kelvin">Kelvin</option>
     </select>
      <input type="submit" name="" value="Calcular">
  </form>
    <?php
     function conversion($temp, $opcion){
       switch ($opcion) {
         case 'Farenheit':
            $Farenheit=($temp*1.8)+32;
            echo $Farenheit;
           break;
           case 'Kelvin':
          $Kelvin=$temp+273;
          echo $Kelvin;
             break;
         default:
        echo "No ha seleccionado nada";
           break;
       }
     }
     if ($_POST) {
       # code...
    $temp=$_POST['temp'];
    $aconvertir=$_POST["aconvertir"];
    echo "El resultado de la conversión es: ";
      conversion($temp,$aconvertir);
      echo "° $aconvertir";
    }else {
      echo "No ha digitado nada";
    }
     ?>

  </body>
</html>
