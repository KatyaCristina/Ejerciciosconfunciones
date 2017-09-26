<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <p>Función que calcule el precio promedio de un articulo considerando que se conoce el precio del articulo en tres
      establecimientos distintos,
      debe mostrar por pantalla los tres establecimientos con su precio y el precio promedio.</p>
      <form  method="POST">
        <label for="">Establecimiento 1</label>
        <input type="text" name="pest1" value=""><br><br>
        <label for="">Establecimiento 2</label>
        <input type="text" name="pest2" value=""><br><br>
        <label for="">Establecimiento 3</label>
        <input type="text" name="pest3" value=""><br><br>
        <input type="submit" name="" value="Calcular promedio"> <br><br>

      </form>
      <hr>
      <?php
      if ($_POST) {

        $pest1=$_POST['pest1'];
        $pest2=$_POST['pest2'];
        $pest3=$_POST['pest3'];

        function promedio($pest1,$pest2,$pest3){
          $prom=($pest1+$pest2+$pest3)/3;
          return $prom;
        }
        if (empty($pest1)&& empty($pest2)&& empty($pest3)) {
          echo "";
        }
        else {
          echo "Establecimiento1, precio: ",$pest1;
          echo "<br>";
          echo "Establecimiento2, precio: ",$pest2;
          echo "<br>";
          echo "Establecimiento3, precio: ",$pest3;
          echo "<br>";
          echo "<br>";
        echo "El precio promedio es: ", promedio($pest1,$pest2,$pest3);
        }
      }else {
        echo "";
      }
       ?>

  </body>
</html>
