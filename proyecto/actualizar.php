<?php
  include "../cnx/conexion.php";
  $id =$_POST['aid'];
  $nombre=$_POST['anombre'];
  $apellido=$_POST['aapellido'];
  $edad=$_POST['aedad'];
  $sexo=$_POST['asexo'];

  $sql ="UPDATE tbl_personal SET nombre = '$nombre', apellido = '$apellido', edad = '$edad', sexo = '$sexo' WHERE id ='$id'";

  echo mysqli_query($conect, $sql);
?>
