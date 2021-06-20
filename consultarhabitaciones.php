<?php 

if (empty($_POST)){
	header("location:reservaciones.html");
}

    require('conexion.php'); 
    $paquetes = $_POST["paquetes"]; 

    try {     
      
		if($paquetes==0){ 
		$consultaEjecutar = "SELECT tipo_habitacion FROM habitaciones";} 
		
		else{ 
	    $consultaEjecutar = "SELECT tipo_habitacion FROM habitaciones
		WHERE id_paquete='$paquetes'";}  
			
		
        $resultado = $objetoPDO -> query($consultaEjecutar); 
		
        foreach ($resultado as $paquetes) { 
		
		echo "<option>$paquetes[0]</option>";   
	}	
		
    } catch (PDOException $error) { 
        echo "Fallo la conexion". $error -> getMessage();
    }
?>