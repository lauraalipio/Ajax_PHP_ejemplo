<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript" language="javascript" src="jquery-1.11.2.js" ></script>
<script type="text/javascript" language="javascript">
$(document).ready(function(e) {
	
	$("#btnEnviar").click(function() {
		
		if( $("#txtIdentificacion").val().length == 0 ) {
			alert("Debes ingresar la identificación");
		} else if( $("#txtNombres").val().length == 0 ) {
			alert("Debes ingresar tus nombres");
		} else if( $("#txtApellidos").val().length == 0 ) {
			alert("Debes ingresar tus apellidos");
		} else if( $("#txtCelular").val().length == 0 ) {
			alert("Debes ingresar tu celular");
		} else if( $("#txtEmail").val().length == 0 ) {
			alert("Debes ingresar tu email");
		} else {
		
			$.ajax({
			  url: "insertar.php",
			  type: 'post',
			  data: $("#frmDatos").serialize(),
			  dataType: 'json',
			  success: function(data) {
				if (data.res == "si") {
					alert(data.msj);
					  $("#cargaDeDatos").load('registros.php');
				} else {
					alert(data.msj);
				}
			  },
			  error: function() {
				alert( "Registro no guardado" );
			  }
			});
		}
		return false;
	});
	

});
</script>
</head>

<body>
<p><strong>EJEMPLO AJAX USANDO JQUERY</strong></p>
<hr />
<form id="frmDatos" name="frmDatos" method="post" action="">
  <table width="247" border="0">
    <tr>
      <td width="87">Identificación</td>
      <td width="144"><input type="text" name="txtIdentificacion" id="txtIdentificacion" /></td>
    </tr>
    <tr>
      <td>Nombres</td>
      <td><input type="text" name="txtNombres" id="txtNombres" /></td>
    </tr>
    <tr>
      <td>Apellidos</td>
      <td><input type="text" name="txtApellidos" id="txtApellidos" /></td>
    </tr>
    <tr>
      <td>Celular</td>
      <td><input type="text" name="txtCelular" id="txtCelular" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtEmail" id="txtEmail" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" /></td>
    </tr>
  </table>
</form>
<br />
<div id="cargaDeDatos">
  
</div>
</body>
</html>
