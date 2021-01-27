<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/materialize.css">
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/funciones.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/funciones.js"></script>
  <title>CRUD PHP AJAX</title>
</head>
<body>
  <h3 class="blue-text center-align">CRUD - PHP - AJAX </h3>
  <h5 class="green-text center-align">Autor: Juan Pablo Cesarini - Cel: 11-6796-9503</h5>
  <div class="row">
    <div class="col l6">
      <form id="frm_registrar" method="post">
        <div class="input-field">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" placeholder="">
        </div>
        <div class="input-field">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" placeholder="">
        </div>
        <div class="input-field">
          <label for="edad">Edad</label>
          <input type="text" name="edad" id="edad" placeholder="">
        </div>
        <div class="input-field">
          <select name="sexo" id="sexo">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
          </select>
          <label for="sexo">Sexo</label>
        </div>
        <button type="submit"class="btn-small blue" name="btn-guardar" id="btn-guardar">Enviar</button>
      </form>
    </div>
    <div class="col l6" id="lista">
<!--       <table id="lista">
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
      </table> -->
    </div>
  </div>


  <!--Modal Trigger -->

    <a href="#modal1" class="waves-effect waves-light modal-trigger"></a>

  <!--Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <form id="frm_actualizar" method="post">
        <div class="input-field">
          <label for="aid">ID</label>
          <input type="text" name="aid" id="aid" placeholder="">
        </div>
        <div class="input-field">
          <label for="anombre">Nombre</label>
          <input type="text" name="anombre" id="anombre" placeholder="">
        </div>
        <div class="input-field">
          <label for="aapellido">Apellido</label>
          <input type="text" name="aapellido" id="aapellido" placeholder="">
        </div>
        <div class="input-field">
          <label for="aedad">Edad</label>
          <input type="text" name="aedad" id="aedad" placeholder="">
        </div>
        <div class="input-field">
          <select name="asexo" id="asexo">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
          </select>
          <label for="asexo">Sexo</label>
        </div>
        <button type="submit"class="btn-small blue" name="btn-actualizar" id="btn-actualizar">Actualizar</button>
        <button type="submit" id="btn-eliminar" class="btn-small red">Eliminar</button>
      </form>

    </div>
    <div class="modal-footer">
      <a href="" class="waves-effect waves-green btn-flat modal-action modal-close">CERRAR</a>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#btn-guardar').on('click', function(e){
      e.preventDefault();
      //console.log("antes de llamar agregar_datos");
      agregar_datos();
    })
  });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#btn-actualizar').on('click', function(e){
        e.preventDefault();
        //console.log("antes de llamar agregar_datos");
        actualizar_datos();
      })
    });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#btn-eliminar').on('click', function(e){
          e.preventDefault();
          //console.log("antes de llamar agregar_datos");
          eliminar_datos();
        })
      });
      </script>

<script type="text/javascript">
  $(document).ready(function(){
    M.AutoInit()
  });
</script>

</body>
</html>
