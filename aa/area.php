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

	<<div class="navegacion">
			<nav>
			   
			    <ul class="clearfix">
			     <b><li><a href="secuencialphp.php">Secuenciales</a></b>
				<ul class="submenu">
						<li><a href="iva.php">Iva De 5 Articulos</a></li>
					<li><a href="velocidad.php">Velocidad De Un Movil</a></li>
					<li><a href="volumen.php">Volumen Esfera</a></li>
					<li><a href="salario.php">Salario 10%</a></li>
					<li><a href="solucion.php">Solucion ax+b=y</a></li>
					<li><a href="valor.php">Valor de curso</a></li>
					<li><a href="notas.php">Nota Total %</a></li>
					<li><a href="area.php">Area triangulo</a></li>
					<li><a href="precio.php">Precio Factura</a></li>
					<li><a href="promedio.php">Promedio</a></li>
					<li><a href="Altura.php">Altura de caida</a></li>
				</ul> 
			</li>

				
			</nav>
		</div>
				<div class="container">
			<h2 align="center">Area de un triangulo</h2>
			<form action="area.php" method="post" class="area-form">
				Base: <input type="number" name="base"placeholder="Ingrese la base" required><br>
				Altura: <input type="number" name="altura"placeholder="Ingrese la altura" required><br>
				
				
			<input type="submit" name="submit" value="Calcular nota total">
			
			</form>
			<?php
			if (isset($_POST['submit'])) {
			$Base = $_POST['base'];
			$Altura = $_POST['altura'];
			
			
			$area = ($Base*$Altura)/2;
			echo "<p class ='resultado'> El area del triangulo es;" . $area;
			
			}
			?>	
</div>
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