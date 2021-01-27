<?php
  include '../cnx/conexion.php';
  $id = $_POST['aid'];

  $sql = "DELETE FROM tbl_personal WHERE id = '$id'";
  echo mysqli_query($conect,$sql);
?>
