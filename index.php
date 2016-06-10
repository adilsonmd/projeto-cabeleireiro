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
		<script>
			$(windows).ready(function() {
				var snackbarContainer = $('#demo-toast-example');
			
				var data = {message: 'Para uma melhor experiência use o navegador Google Chrome.'};
					snackbarContainer.MaterialSnackbar.showSnackbar(data);
				});
			}());
		</script>

	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
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