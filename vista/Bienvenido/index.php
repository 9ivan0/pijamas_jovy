<?php
	include_once "../menu/index.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../../images/favicon.ico" />
	<link rel="stylesheet" href="../menu/css/style.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../menu/css/style_icons.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../../css/estilos.css">
	
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>
<body>
	<div class="bienvenido">
		<center><h2 class="bienv text-white" >Bienvenido <?php echo ' '.$_SESSION['nombre_us'] . ' ' . $_SESSION['apellido_us']; ?> </h2></center>
	</div>
<div class="container2">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
		<img src="../../img/fond1.png" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
	  <img src="../../img/2.jpg" class="d-block" alt="...">
	  
    </div>
  </div>
</div>
   <?php 
      include_once "pijamas.php"  
   ?>

</div>


	<script src="../librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="../librerias/bootstrap4/popper.min.js"></script>
	<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="../librerias/sweetalert.min.js"></script>


</body>
</html>
