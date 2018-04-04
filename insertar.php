<?php
include("config.php");
$res = array();
$res["res"] = "no";
$sql= "INSERT INTO personas(identificacion,nombres,apellidos,celular, email) " ;
$sql.= " VALUES('".$_POST['txtIdentificacion']."','".$_POST['txtNombres']."',";
$sql.= "'".$_POST['txtApellidos']."','".$_POST['txtCelular']."','".$_POST['txtEmail']."')";

$rs = mysql_query($sql);

if(!$rs) {
	$res["msj"] = "Error al intentar insertar ".mysql_error();
} else {
	$res["res"] = "si";
	$res["msj"] = "Registro insertado";
}
echo json_encode($res);
?>