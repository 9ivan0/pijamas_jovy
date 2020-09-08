<?php
session_start();
if ($_SESSION['id_rol'] < 4) {
	$usuario=$_SESSION['id_rol'];
?>

	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
		<title>Pijamas Jovy</title>
		<link rel="icon" type="image/png" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css" media="screen, projection" type="text/css" />
		<link rel="stylesheet" href="css/style_icons.css" media="screen, projection" type="text/css" />
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	</head>
	<body>
		
			<div class="info-school-period" >
			
        <a class="name_user dropdown" data-toggle="dropdown">       
			<center><span class="caret"><img class="image_user" src="../../img/avatar2.png" /><?php echo ' '.$_SESSION['nombre_us'] . ' ' . $_SESSION['apellido_us']; ?></span></center>		
        </a>
        <ul class="dropdown-menu">
          <li><a href="../../controlador/Logout.php">Cerrar Sesión</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page1-3</a></li>
        </ul>
	  </li>

					<h2 class="titulo text-white"  >Pijamas Jovy</h2>
					<a data-toggle="modal" data-target="#user1" class="nav-link">
                       <img class="menu" src="../../img/menu.png" alt="">
					</a>
				</div>
			</header>
			<aside>
				<?php
				if ($usuario=="1" ){ 
				include_once "administrador.php";
				}
				if ($usuario=="2" ){ 
				include_once "vendedor.php";
				}
				if ($usuario=="3" ){ 
					include_once "costurero.php";
					}
				
				?>
			</aside>
		</div>
	</body>
	</html>
<?php
} else {
	header('Location:../../login.php');
}
?>