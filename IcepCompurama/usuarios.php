<?php 

	$conexion=mysqli_connect('localhost','root','','pruebas');

 ?>


<!DOCTYPE html>
<html>
<head>

<style type="text/css">
			
		*  {
			margin:0px;
			padding:0px;
		}
		
		#header {
			margin:auto;
			width:1000px;
			font-family:Arial, Helvetica, sans-serif;
		}
		
		ul, ol {
			list-style:none;
		}
		
		.nav > li {
			float:left;
		}
		
		.nav li a {
			background-color:white;
			color:darkblue;
			text-decoration:none;
			padding:10px 12px;
			display:block;
		}
		
		.nav li a:hover {
			background-color:gray;
		}
		
		.nav li ul {
			display:none;
			position:absolute;
			min-width:140px;
		}
		
		.nav li:hover > ul {
			display:block;
		}
		
		.nav li ul li {
			position:relative;
		}
		
		.nav li ul li ul {
			right:-140px;
			top:0px;
		}

		table{

			magin-left:auto;
			margin-right: auto;
		  }


	

		
	</style>





	<title>usuarios</title>
</head>
<body>

<img class="imagen-centro" src="imagenes/bar1.png" alt="bar1" width="1345" height="351 ">
	<div id="header">
			<ul class="nav">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="servicios.html">Servicios</a>
					<ul>
						
						<!--<a href="Menu.html" target="_blank"> <h1><strong>Regresar al Menu</strong></h1><br/> </a>-->
							
						</li>
					</ul>
				</li>
				<li><a href="acerca de.html">Acerca de</a>
					<ul>
						
					</ul>
				</li>
				<li><a href="contacto.html">Contacto</a></li>
				<li><a href="clientes.html">Clientes</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="Registro.html">Registro</a></li>
				
				
			</ul>
		</div>
	<!-- Esta es la seccion de Encabezados-->
	
	
	
</strong></h1><br/> </a>

<!-- Esta es la seccion de menu-->

<!-- fin de menu
<a href="index.html" target="_blank"> La Computadora</a>
	<a href="Internet.html" target="_blank"> El internet</a>
	<a href="Web.html" target="_blank"> La Web</a>   -->
	
	
	
	<!-- fin de menu-->
	
	
	<link rel="stylesheet" href="style.css">



	
<br>

	<table border="1" >
		<tr>
			<td>ID</td>
			<td>USUARIO</td>
			<td>PASSWORD</td>
			
		</tr>

		<?php 
		$sql="SELECT * from usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['USUARIO'] ?></td>
			<td><?php echo $mostrar['PASSWORD'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>


</body>
</html>