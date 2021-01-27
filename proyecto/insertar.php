<?php
  include "../cnx/conexion.php";
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $edad=$_POST['edad'];
  $sexo=$_POST['sexo'];

  $sql = "INSERT INTO tbl_personal (nombre, apellido, edad, sexo)
          VALUES ('$nombre', '$apellido', '$edad', '$sexo')";
  echo mysqli_query($conect, $sql);
?>
