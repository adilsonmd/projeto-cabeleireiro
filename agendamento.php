<!DOCTYPE html>

<html>

	<head>
		<title>Agendamento - Cabelos</title>
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

			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
				
				<div id="content" class="mdl-cell mdl-cell--8-col mdl-layont__content"> <!-- Conteúdo -->
					<h3>Marque um horário</h3>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="user">
						<label class="mdl-textfield__label" for="user">User name</label>
					</div>
				</div>

				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
			</div>

			<?php
            include("footer.html");
			?>
		</div>
		
	</body>
</html>