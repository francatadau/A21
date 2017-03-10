<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos por conferencia</title>
  </head>
  <body>
    <?php

    include "dbNBA.php";
    //Crear el objeto de conexion
    $nba=new dbNBA();

    $resultadoInsert=$nba->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);

    if ($resultadoInsert==true) {
      $resultado=$nba->devolverEquipo($_POST["nombre"]);
      $fila=$resultado->fetch_assoc();

      echo "Nombre".$fila['Nombre']."<br>";
      echo "Ciudad".$fila['Ciudad']."<br>";
      echo "<Conferencia>".$fila['Conferencia']."<br>";
      echo "<Division>".$fila['Division']."<br>";
    }else {
      echo "Error";
    }
      ?>
  </body>
</html>
