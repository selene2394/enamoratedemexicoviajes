<?php 
    require('conexion.php'); 
    $playa = $_POST["playa"];  
    try { 
        
        $consultaEjecutar = "SELECT nombre_hotel FROM hoteles
		WHERE id_playas='$playa'";  
		
        $resultado = $objetoPDO -> query($consultaEjecutar); 
		
        foreach ($resultado as $playa) {  
		
		echo "<option>$playa[0]</option>";  
	}	
		
    } catch (PDOException $error) { 
        echo "Fallo la conexion". $error -> getMessage();
    }
?>