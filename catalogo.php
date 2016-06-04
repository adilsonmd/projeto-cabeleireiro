<!DOCTYPE html>

<html>

	<head>
		<title>Catálogo - Cabelos</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="mdl/material.red-orange.min.css" />
		<script defer src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <?php 
            include("menu.php");
            ?>

			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">Categorias</span>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link">Cortes</a>
					<a href="#" class="mdl-navigation__link">Hidratação</a>
					<a href="#" class="mdl-navigation__link">Alisamento</a>
					<a href="#" class="mdl-navigation__link">Coloração</a>
				</nav>
			</div>
		</div>
	</body>
</html>
