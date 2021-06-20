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

	<title>PAQUETES</title>
	
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

<!-- Seccion hoteles disponibilidad - inicio -->

<section class="HotelDisp" id="HotelDisp">

<h1 class="heading">Paquetes</h1>
<h3 class="title">Aplicables en las 4 playas.</h3>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="imagenes/paqueteDasc.png" alt="">
        </div>
        <div class="content">
			<center>
            <h3>Paquete Convenio "Dasc" </h3>
			</center> 
			
            <p>Incluye: </br> </br>
			►Costo de Habitación por noche. (Habitacion: View Garden / 
			ocean view / Delux..) </br>
			(Sujeto a disponibilidad, temporada y cambio de moneda.) </br>
			►Desayuno Buffete incluido </br>
			►Visita a dos sitios Turístico.  </br>
			►Bebidas de cortesia al ingreso. </br></br>	
			►Presentando tu credencial "DASC" recibe un 10% de descuento. </br> </br>	
			</br> 
			<center> <p>  $2,480MN  </p> </center>
			</p>
			<center>
            <a href="reservacion.html"><button class="btn">Reserva ya!</button></a>
			</center>
		</div>
    </div>

    <div class="box">
        <div class="image">
            <img src="imagenes/basico.png" alt="">
        </div>
        <div class="content">
			<center>
            <h3>Paquete Básico </h3>
			</center>
			<p>Incluye: </br> </br>
			►Costo de Habitación View garden por noche.</br>
			(Sujeto a disponibilidad, temporada y cambio de moneda.) </br>
			►Desayuno Continental incluido. </br>
			</br> 
			<center> <p>  $2,120MN </p></center>
			</p>
			<center>
            <a href="reservacion.html"><button class="btn">Reserva ya!</button></a>
			</center>
			</div>
    </div>

    <div class="box">
        <div class="image">
            <img src="imagenes/intermedio.png" alt="">
        </div>
        <div class="content">
		<center>
            <h3>Paquete Intermedio </h3>
		</center>
            <p>Incluye: </br> 
			►Costo de Habitación por noche. (Habitaciones: Ocean view)</br> 
			(Sujeto a disponibilidad, temporada y cambio de moneda.) </br>
			►Desayuno Buffete incluido </br>
			►Visita a sitio Turístico .  </br>
			</br> 
			<center> <p>  $6,570MN  </p> </center>
			</p>
			<center>
            <a href="reservacion.html"><button class="btn">Reserva ya!</button></a>
			</center>
			</div>
    </div>
	
	<div class="box">
        <div class="image">
            <img src="imagenes/lux.png" alt="">
        </div>
        <div class="content">
		<center>
            <h3>Paquete Lux </h3>
		</center>
            <p>Incluye: </br> 
			►Costo de Habitación por noche. (Habitaciones: Delux) 
			(Sujeto a disponibilidad, temporada y cambio de moneda.) </br>
			►Desayuno Buffete incluido </br>
			►Visita a sitio Turístico</br>
            ►Todo incluido en bar. </br>
			►Room service sin costo extra</br>
			</br> 
			<center><p> $13,260MN  </p></center>
			</p>
			<center>
            <a href="reservacion.html"><button class="btn">Reserva ya!</button></a>
			</center>
			</div>
    </div>
   
</div>

</section>

<!-- hoteles disponibilidad - fin -->

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

<h1 class="credit"> Sitio creado con fines escolares por <span> Marian Selene Ramírez Carsolio y Axel Marcos Brito</span> alumnos DASC . </h1>

</section>


<!-- Seccion footer - fin -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>