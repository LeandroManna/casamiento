<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/acercade.css">
	<link rel="icon" href="../imagenes/logoManna3.ico">
	<title>Nuestra Historia | A&J</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/85a9ee331b.js" crossorigin="anonymous"></script>
	<script defer src="../java/index.js"></script>
</head>
<body>
	<div class="grid-container">
		<div class="grid-header grid-item">
			<nav class="nav">
				<div class="grid-header__imagen">
					<a href="index.php">
						<img src="../imagenes/logopizzo.png">
					</a>
				</div>
				<button class="nav-toggle">
					<i class="fa-solid fa-bars"></i>
				</button>
				<ul class="nav-menu nav-menu_visible">
					<li class="nav-menu-item">
						<a type="text" href="index.php" class="nav-menu-link nav-link">Bienvenidos!!!</a>
					</li>
					<li class="nav-menu-item">
						<a type="text" href="contactanos.php" class="nav-menu-link nav-link">Contactanos</a>
					</li>
					<li class="nav-menu-item">
						<a type="text" href="login.php" class="nav-menu-link nav-link">Confirma tu asistencia</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="grid-main grid-item">
			<div class="imagen_principal"><p>Andrea & Joaquin</p></div>
		</div>
		
		<div class="grid-aside grid-item">
			
		</div>
		<div class="grid-footer grid-item">
			<div class="footer__caja">
				<div class="footer-logo">
					<a href="index.php">Andrea y Joaquin</a>
				</div>
				
				<div class="footer-iconos">
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-solid fa-envelope"></i></a>
					<a href="#"><i class="fa-brands fa-youtube"></i></a>
					<a href="#"><i class="fa-brands fa-whatsapp"></i></a>
					<a href="#"><i class="fa-solid fa-square-phone"></i></a>
					<?php
						include "copyright.php";
					?>
				</div>

			</div>
		</div>
	</div>
</body>
</html>