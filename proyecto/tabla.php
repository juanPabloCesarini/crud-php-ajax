<table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th></th>
          </tr>
        </thead>
        <?php
          include '../cnx/conexion.php';
          $sql = "SELECT * FROM tbl_personal";
          $ejecutar = mysqli_query($conect,$sql);
          while ($fila=mysqli_fetch_array($ejecutar)){

            $datos = $fila[0].'-'.$fila[1].'-'.$fila[2].'-'.$fila[3].'-'.$fila[4];
        ?>
        <tbody>
          <tr>
            <td><?php echo $fila[0];?></td>
            <td><?php echo $fila[1];?></td>
            <td><?php echo $fila[2];?></td>
            <td><?php echo $fila[3];?></td>
            <td><?php echo $fila[4];?></td>
            <td><button type="button" id="ver-modal" class="btn-small green modal-trigger" data-target="modal1" onclick="llenar_modal_actualizar('<?php echo $datos;?>');">Editar</button></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
