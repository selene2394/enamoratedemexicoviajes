<?php 

if (empty($_POST)){
	header("location:registro.html");
}
	
    require('conexion.php');
    $usuario = $_POST["usuario"];

    try {
        
        $consultaEjecutar = "SELECT usuario FROM registro
		WHERE usuario='$usuario'";   
		
        $resultado = $objetoPDO -> query($consultaEjecutar);  
		
        if ($resultado->rowCount() > 0) { 
		
            echo '<script> alert("Usuario registrado anteriormente")</script>';
            header("locatio:registro.html");			
			
        }else{  
			
    $nombre =$_POST["nombre"];
	$correo =$_POST["correo"];
	$celular =$_POST["celular"];
	$usuario=$_POST["usuario"];
	$contrasena =password_hash($_POST["contrasena"],PASSWORD_DEFAULT);
	
            $consultaEjecutar = "INSERT INTO registro (nombre_completo, correo_electronico,
			numero_celular, usuario, contrasena)
			VALUES ('$nombre','$correo','$celular','$usuario', '$contrasena')";
			
            $resultado = $objetoPDO -> query($consultaEjecutar);  
			
            if ($resultado) {  
               echo '<script> alert("Registro Exitoso")</script>';
			   require('ingreso.html');
            }
        }
    } catch (PDOException $error) { 
        echo "Fallo la conexion". $error -> getMessage();
    }
?>