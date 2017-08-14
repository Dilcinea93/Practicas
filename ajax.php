<?
	include('conexion.php');

	$query= $conexion->query("SELECT * from container ORDER BY con_peso,con_volu asc");

            while ($rs=$query->fetch_array()){
                $con_id=$rs['con_id'];
                $con_peso= $rs['con_peso'];
                $con_volu= $rs['con_volu'];
                $con_error= $rs['con_error'];
                $con_des=$rs['con_des'];
                $con_eng= $rs['con_eng'];
            }


$resultado= array("con_id"=>"$con_id","con_peso"=>"$con_peso","con_volu"=>"$con_volu","con_error"=>"$con_error","con_des"=>"$con_des","con_eng"=>"$con_eng");
header("Content-type: application/json");
print_r(json_encode($resultado));
?>