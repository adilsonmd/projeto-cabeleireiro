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
		
		<script src="dialog-polyfill.js"></script>
  		<link rel="stylesheet" type="text/css" href="dialog-polyfill.css" />

	</head>

	<body>
		
<div class="bg-main">
          </div>
    			<header class="mdl-layout__header">
				<?php 
				include("menu.php");
				?>
        	</header>


			<div id="content" class="mdl-layout__content">
				<h3 class="mdl-layout__title">Página inicial</h3>
			</div>

			<?php
            include("footer.html");
			?>

		</div>
		
	</body>
</html>
