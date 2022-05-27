<?php
include "configs/config.php";
include "configs/funciones.php";

if(!isset($p)){
	$p = "principal";
} else {
	$p = $p;
}

?>
<!DOCTYPE HTML>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="fontawesome/js/all.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	<title>Mi Tienda Online</title>
</head>
<body>
    <div class="header">
    	Grasse Matinée
    </div>
    <div class="menu">
    	<a href="?p=principal">Inicio</a>
    	<a href="?p=Productos">Productos</a>
    	<a href="?p=Ofertas">Ofertas</a>
    	<a href="?p=Carrito">Bolsa</a>
        <a href="?p=admin">Administrador</a>
    </div>
    <div class="cuerpo">
    	<?php
        
          if (file_exists("modulos/".$p.".php")){
          	include "modulos/".$p.".php";
          } else {
          	echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
          }
    	?>
    </div>
    <div class="footer">
    	Copyright AnySlehider &copy; <?=date("Y")?>
    </div>


</body>

</html>