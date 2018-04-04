<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_prueba";

$link = mysql_connect($servidor, $usuario, $clave);
if (!$link) {
    die('Conexión fallida: ' . mysql_error());
}

$db_selected = mysql_select_db($bd, $link);

if (!$db_selected) {
    die ('Error al intentar seleccionar la base de datos : ' . mysql_error());
}


?>