<?php 
if (empty($_POST)){  
	header("location:reservacion.html"); 
}

    require('conexion.php'); 
	
    $playa =$_POST["playa"];  
	$hoteles =$_POST["hoteles"];
	$ingreso =$_POST["ingreso"];
	$salida=$_POST["salida"];
	$adultos =$_POST["adultos"];
	$ninos =$_POST["ninos"];
	$paquetes=$_POST["paquetes"];
	$habitacion =$_POST["habitacion"];
	
	if(isset($_POST["cancelar"])){
	exit; 
	header("location:playas.php");
	}
	
		
    try {
		
		$revisarfecha = "SELECT nombre_hotel, fecha_ingreso, fecha_salida FROM disponibilidadhotel
			WHERE nombre_hotel = '$hoteles' AND fecha_ingreso = '$ingreso' AND fecha_salida= '$salida'";
			
			
			
		$revisar = $objetoPDO -> query($revisarfecha);  
		
			if ($revisar->RowCount()>0 ) { 
		
			echo '<script> alert("Fecha no disponible")</script>';
			require('reservacion.html');
			exit;  
		}
		
		session_start(); 
		$aleatorio= rand(1000,1000000); 
		$no_referencia= $_SESSION["sesion"].''.$aleatorio; 
		
		$usuario =$_SESSION["sesion"];
		
		$_SESSION["nreferencia"]= $no_referencia; 
	
	
			$consultaEjecutar1 = "INSERT INTO disponibilidadhotel ( nombre_hotel, fecha_ingreso, fecha_salida) 
			VALUES ('$hoteles', '$ingreso', '$salida')"; 
			
			$objetoPDO -> query($consultaEjecutar1); 
			 
            $consultaEjecutar = "INSERT INTO reservaciones (usuario, playa, hotel, fecha_ingreso, fecha_salida,
			adultos, ninos, paquete, tipo_habitacion, no_referencia) 
			VALUES ('$usuario','$playa', '$hoteles', '$ingreso', '$salida', '$adultos', '$ninos',
			'$paquetes', '$habitacion','$no_referencia')"; 
			
			$resultado = $objetoPDO -> query($consultaEjecutar);  
			
            if($resultado){ 
			echo '<script> alert("Recuerde que no hay cancelaciones ni cambios")</script>';
			
			header("location:facturacion.php");
			
			
		} 
			
	  } catch (PDOException $error) {  
        echo "Fallo la conexion". $error -> getMessage();
    }
?>