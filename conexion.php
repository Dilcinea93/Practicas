<?
	$conexion= new mysqli('localhost','root','1234','galpa_export_local');

	if($conexion->connect_errno>0){
		die("No se ha podido conectar a la base de datos". $conexion->mysql_error);
	}
?>