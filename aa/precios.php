<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Algoritmos</title>
	<link rel="stylesheet" href="estilos.css">

<body>  <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
<source src="nebu.mp4" type="video/mp4">
</video>
</head> 

	<header class="banner">
		<h1 class="banner-title"> ALGORITMOS EN PHP</h1>
	</header>

<div class="navegacion">
			<nav>
			   
			    <ul class="clearfix">
			     <b><li><a href="condicionphp.php">Condicionales</a></b>
				<ul class="submenu">
					<li><a href="llantas.php">Precio de llantas</a></li>
					<li><a href="superm.php"> Promocion del supermercado</a></li>
					<li><a href="pulsacion.php">N° Pulsaciones</a></li>
					<li><a href="CuoCliente.php">Cuota de cliente</a></li>
					<li><a href="Matri.php">Costo de matricula</a></li>
					<li><a href="CuoComprador.php">Cuota de comprador</a></li>
					<li><a href="SAR.php">SAR</a></li>
					<li><a href="Strabajador.php">Salario de trabajador</a></li>
					<li><a href="descuento.php">Descuento</a></li>
					<li><a href="precios.php">Precios de un articulo</a></li>
					<li><a href="2x2.php">2x2</a></li>
					<li><a href="cuadratica.php">cuadratica</a></li>
					

			

</div></ul>	
			</li>
						   
			        <b><li><a href="index.php">Regresar</a></b>
				       
				     </li>
 </nav>

				 
 <div class="container">
			<h2 align="center">Precios de un articulo
 </h2>
			<form action="precios.php" method="post" class="salario-form">
				Valor de la compra: <input type="number" name="c"placeholder="Ingrese el valor de la compra" required><br>
				
			<input type="submit" name="submit" value="Calcular ">
			
			</form>
			<?php
			if (isset($_POST['submit'])) {
			$Compra = $_POST['c'];	
			$Total= ($Compra*19)/100;
           $Tp= $Compra+$Total;
			echo "<p class ='resultado'> El precio del articulo es;" . $Compra;
echo "<p class ='resultado'> El precio del articulo con IVA es;" . $Tp;
			}
			?>	
	




 <footer><b>
	 	<div class="contenedor">
	 		<div class="nosotros">
	 		<h3 class="op">Idea de modalidad</h3>
	 		<p class="f">
	 			La modalidad de software  es muy interesante,a pesar de que hay que pensar y analizar nuestro trabajo si no nos a quedado bien, opino que nos ayuda aparte de obtener diferentes conocimientos, a analizar y observar, y es muy buena a decir verdad según mi opinion pues no es la misma a la de los demás.
	 		</p>
	 		
	 	</div>
	 	<div class="menu">
	 		<h3 class="op">Mis redes sociales</h3>
	 		<ul class="galeria">
	 			<li><img src="img/face.png"><A HREF="https://www.facebook.com/alexa.forero.5070276?mibextid=ZbWKwL/AA/BB/CC/DD/pagina.html"> Facebook </A></li>
	 			<li><img src="img/insta.jpg"><A HREF="https://www.instagram.com/alex_d13f/">Instagram</A></li>
	 			
	 			
	 		</ul>
	 	</div>
	 </div>
	 <br>
	 <p class="copyright">
	 	Todos los derechos reservados a &copy; Alexandra Forero David
	 </p>

	</b> </footer>
	 </body>
	 </html>