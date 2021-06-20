<?php
session_start(); 
if(!isset($_SESSION["sesion"])){
	header("location:ingreso.html");
}  

?>

<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="imagenes/mex.png"/>

	<title>FACTURACION</title>
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	<!-- Archivo CSS  -->
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<!-- Header Menu - comienzo  -->

<header>

<nav class="navbar">
    <ul>
        <li style="--i:1;"><a href="index.html">Inicio</a></li>
		<li style="--i:2;"><a href="registro.html">Registro</a></li>
        <li style="--i:3;"><a href="playas.php">Playas </a></li>
        <li style="--i:4;"><a href="hotel-disponibilidad.php">Hoteles y Disponibilidad</a></li>
        <li style="--i:5;"><a href="paquetes.php">Paquetes</a></li>
		<li style="--i:6;"><a href="reservacion.html">Reservación</a></li>
		<li style="--i:7;"><a href="facturacion.php">Facturacion</a></li>
    </ul>
</nav>

<div class="menu"><i class="fas fa-bars"></i></div>

</header>

<!-- Header Menu - fin -->

<!-- Seccion reservacion - inicio  -->

<section class="newsletter">

<div class="box">

	<?php
	
	if(isset($_SESSION["nreferencia"])){  
	
	$no_referencia= $_SESSION["nreferencia"];  
	
	echo "<h1 style='background-color:yellow;'> Su número de referencia es: $no_referencia </h1>"; 
	
	unset($_SESSION["nreferencia"]); 
	}
	?>

    <h1>Ingrese su No. Referencia</h1>
    <p>Descargue su hoja de confirmación.</p>
	

		<form action="fpdf/index.php" method="POST">
 
		<input type="text" placeholder="Escriba su No. de referencia" name="referencia">
        <input type="submit" class="btn" value="Generar">
    </form>
</div>

</section>

<!-- Seccion reservacion - fin -->

<!-- Seccion contacto - inicio  -->

<section class="contFact" id="contFact">

<h1 class="heading">Facturación</h1>
<h3 class="title">Ingrese sus datos.</h3>

<?php
	
	if(isset($_SESSION["error_referencia"])){ 
	
	$no_referencia= $_SESSION["error_referencia"];  
	
	echo $_SESSION["error_referencia"];  
	
	
	unset($_SESSION["error_referencia"]); 
	}
	?>

<form action="fpdf/factura1.php" method="post"> <!-- -->

<div class="inputBox2">
	<input type="text" placeholder="No. Referencia:" name="referencia" Required>
	
</div>	

	
<div class="inputBox">
    <input type="text" placeholder="RFC:" name="rfc" Required>
    <input type="text" placeholder="Razón Social:" name="razon" Required>
</div>


<div class="inputBox">
    <input type="text" placeholder="Calle:" name="calle" Required>
    <input type="text" placeholder="Número exterior:" name="numeroExterior" Required>
</div>

<div class="inputBox">
    <input type="text" placeholder="Colonia:" name="colonia" Required>
    <input type="text" placeholder="Código Postal:" name="cp" Required>
</div>

<div class="inputBox">
    <input type="text" placeholder="Delegación o Municipio:" name="delegacion" Required>
    <input type="text" placeholder="Ciudad o localidad:" name="ciudad" Required>
</div>

<div class="inputBox">
    <input type="text" placeholder="Estado:" name="estado" Required>
    <input type="text" placeholder="País:" name="pais" Required>
</div>

<input type="submit" value="facturar" class="btn">


</form>

</section>

<!-- Seccion contacto - fin -->

<!-- Seccion footer - inicio  -->

<section class="footer">

<div class="box">
    <h3>Nota:</h3>
    <p>Proyecto escolar realizado para la 
	Universidad "DASC" bajo las materias de 
	Arquitectura y diseño para la web III y 
	Desarrollo de aplicaciones cliente-servidor II, 
	por lo tanto los precios y paquetes, son ficticios.</p>
</div>

<div class="box">
    <h3>Redes Sociales</h3>
    <a href="https://www.facebook.com/Viajes-Enam%C3%B3rate-de-M%C3%A9xico-104267155204069/?ref=pages_you_manage">facebook</a>
    <a href="https://www.youtube.com/channel/UCe3mfgn2EQ3AvWg_eif4X4g">Youtube</a>
   
</div>

<h1 class="credit"> Sitio creado con fines escolares por <span> Marian Selene Ramírez Carsolio y Axel Marcos Brito </span> alumnos DASC . </h1>

</section>


<!-- Seccion footer - fin -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>  <!-- para el boton del menu --> 


</body>
</html>