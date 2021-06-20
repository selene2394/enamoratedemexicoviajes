<?php 
if (empty($_POST)){ 
	header("location:login1.html");
}

require('conexion.php');  
	
$usuario = $_POST["us"]; 
	
$password = $_POST["pass"];	


try {
	$consultaEjecutar = "SELECT usuario, contrasena FROM registro
	WHERE usuario= '$usuario'";  
	
	$resultado = $objetoPDO -> query($consultaEjecutar);  

	$numeroFila = $resultado -> FetchColumn(1); 
		
	if (password_verify($password, $numeroFila)) { 
	
	$consultaEjecutar = "SELECT nombre_completo, correo_electronico, numero_celular FROM registro
	WHERE usuario= '$usuario' "; 
	$resultado = $objetoPDO -> query($consultaEjecutar); 
	
	session_start(); 
	
	foreach($resultado as $datos){ 
	$_SESSION["nombre_completo"]=$datos[0];
	$_SESSION["correo_electronico"]=$datos[1]; 
	$_SESSION["numero_celular"]=$datos[2];
	
	}		
	
	$_SESSION["sesion"]=$usuario; 
	

		header("location: playas.php"); 


	}else { 
		
		header("location: ingreso.html"); 
	}

}catch (PDOException $error){
	echo "FALLÓ LA CONEXIÓN".$error-> getMessage(); 
 } 

?>
