function agregar_datos(){
  var datos = $('#frm_registrar').serialize();

  $.ajax({
    method: 'post',
    url: '../proyecto/insertar.php',
    data: datos,
    success: function(e){
      if (e==1){
        alert("Registro OK");
        $('#lista').load('../proyecto/tabla.php');
      }else{
        alert("Hubo un error!");
      }
    }
  });
  return false;
}

function llenar_modal_actualizar(datos){
  datosForm = datos.split("-");
  console.log(datos);
  console.log(datosForm);
  $('#aid').val(datosForm[0]);
  $('#anombre').val(datosForm[1]);
  $('#aapellido').val(datosForm[2]);
  $('#aedad').val(datosForm[3]);
  $('#asexo').val(datosForm[4]);
}

function actualizar_datos(){
  var datos = $('#frm_actualizar').serialize();

  $.ajax({
    method: 'post',
    url: '../proyecto/actualizar.php',
    data: datos,
    success: function(e){
      if (e==1){
        alert("Registro actualizado");
        $('#lista').load('../proyecto/tabla.php');
      }else{
        alert("Hubo un error!");
      }
    }
  });
  return false;
}

function eliminar_datos(){
  datos= $('#frm_actualizar').serialize();
  alert(datos);
  $.ajax({
    method: 'post',
    url: '../proyecto/eliminar.php',
    data: datos,
    success: function(e){
      if (e==1){
        alert("Registro eliminado");
        $('#lista').load('../proyecto/tabla.php');
      }else{
        alert("Hubo un error!");
      }
    }
  });
  return false;
}
