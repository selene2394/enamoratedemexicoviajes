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

	<title>PLAYAS</title>
	
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

<!-- Seccion playas Norte - inicio  -->

<section class="playas" id="playas">

<h1 class="heading">Playas Norte  </h1>
<h3 class="title">Cabo San Lucas    //    Playa Bagdad </h3>

<div class="card-container">

    <div class="card">
        <img src="imagenes/c4.jpg" alt="">
        <div class="info">
            <h3>Cabo San Lucas </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Ubicado en el extremo sur de la Península de Baja California,
			el territorio árido se entremezcla con el Pacífico y el Mar Cortés.</p>
			<center>
            <a href="hotel-disponibilidad.php"><button class="btn">Lista de hoteles</button></a>
			</center>
        </div>
    </div>

    <div class="card">
        <img src="imagenes/b4.jpg" alt="">
        <div class="info">
            <h3>Playa Bagdad </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
            </div>
            <p>Ubicada en el noreste del estado de Tamaulipas, cerca de río Bravo 
			y desemboca en el Golfo de México</p>
			<center>
            <a href="hotel-disponibilidad.php"><button class="btn">Lista de hoteles</button></a>
			</center>
        </div>
    </div>
<!-- Seccion playas Sur - fin -->

<!-- Seccion playas Sur - inicio  -->
</div>

<h1 class="heading">Playas Sur  </h1>
<h3 class="title">Huatulco    //    Cancún </h3>

<div class="card-container">

    <div class="card">
        <img src="imagenes/h2.jpg" alt="">
        <div class="info">
            <h3>Huatulco </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p> localizados en la Costa Sur del Pacífico Mexicano, 
			y es el destino de playa más importante del Estado de Oaxaca.
			Más del 60% del desarrollo turístico es reserva natural, 
			entre ellos el Parque Nacional Huatulco</p>
			<center>
            <a href="hotel-disponibilidad.php"><button class="btn">Lista de hoteles</button></a>
			</center>
        </div>
    </div>

    <div class="card">
        <img src="imagenes/c1.jpg" alt="">
        <div class="info">
            <h3>Cancún  </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
            </div>
            <p>La isla de Cancun se encuentra ubicada en Quintana Roo, México, 
			y rodeada por las claras aguas del Caribe, cuya arena tiene la particularidad 
			de ser fina y blanca.</p>
			<center>
            <a href="hotel-disponibilidad.php"><button class="btn">Lista de hoteles</button></a>
			</center>
        </div>
    </div>

</div>

</section>
<!-- Seccion playas Sur - fin -->
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