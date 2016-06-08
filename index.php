<!DOCTYPE html>

<html>

	<head>
		<title>Pagina Inicial - Cabelos</title>
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

			<div id="content" class="mdl-layout__content">
				<h3 class="mdl-layout__title">Página inicial</h3>
			</div>

			<?php
            include("footer.html");
			?>

		</div>
		
	</body>
</html>